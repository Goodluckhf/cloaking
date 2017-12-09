'use strict';
const Promise            = require('bluebird');
const exec               = Promise.promisify(require('child_process').exec);
const fs                 = Promise.promisifyAll(require('fs'));
const rimraf             = Promise.promisify(require('rimraf'));
const ncp                = Promise.promisify(require('ncp').ncp);
const recursiveReadAsync = Promise.promisify(require('recursive-readdir'));

const landingName = process.argv[2];
const url         = process.argv[3];

console.log('url', url);
//process.exit(0);
const landDirAbs = '__land';
const landDir = `./${landDirAbs}`;

(async () => {
	const removeLandDir = async () => {
		return await rimraf(landDir);
	};

	const onError = async (err, message) => {
		console.log(message || '', err);
		//await removeLandDir();
		process.exit(0);
	};

	try {
		await fs.mkdirAsync(landDir);
	} catch (err) {
		onError(err);
	}

	console.log("Download files...");
	try {
		await exec(`wget -P ${landDir} -l 0 -Hpr "${url}"`);
	} catch(err) {
		console.log(err);
	}
		
	console.log('ok! Files has been downloaded');
	
	try {
		const reg = /\?.*/i;

		const getFilesForRename = async () => {
			const landFiles = await recursiveReadAsync(landDir);
			return landFiles.reduce((arr, file) => {
				if (reg.test(file)) {
					arr.push(file);
				}

				return arr;
			}, []);
		};

		const filesForRename = await getFilesForRename();
		console.log("переименовываем файлы ");

		await Promise.all(filesForRename.map(file => {
			return fs.renameAsync(file, file.replace(reg, ""));
		}));

		const landFiles = await recursiveReadAsync(landDir);
		const dirNames = landFiles.reduce((arr, filePath) => {
			if (! /(?:(?:index\.html|privacypolicy)|\.(?:css|js|jpg|jpeg|png|bmp))/i.test(filePath)) {
				return arr;
			}
			
			arr.push(filePath);
			return arr;
		}, []);
		
		const destLandDir = `./public/landing/${landingName}/`;
		console.log("копируем в public");
		await fs.mkdirAsync(destLandDir);
		await Promise.each(dirNames, dir => {
			const reg = new RegExp(`^(${landDirAbs}\/[^/]+).*`, 'i');
			const fromPath = dir.replace(reg, "$1");
			return ncp(fromPath, destLandDir, {clobber: false});
		});
		
		//заменяем privacypolicy
		await fs.renameAsync(`${destLandDir}privacypolicy`, `${destLandDir}privacypolicy.html`);
		
		const readAndReplace = async (file, regHashes) => {
			let text = await fs.readFileAsync(file, 'utf-8');
		
			const changedText = regHashes.reduce((textToChange, hash) => {
				return textToChange.replace(hash.reg, hash.replaceTo);
			}, text);
			
			return fs.writeFileAsync(file, changedText, 'utf-8');
		};
		
		console.log("исправляем пути.... index.html");
		await readAndReplace(`${destLandDir}/index.html`, [{
				//Удаляем ненужный файл
				reg: /<script.*src=".*unload_submit\.js.*">.*<\/script>/,
				replaceTo: ""
			}, { 
				//заменяем внешние ссылки
				reg: /(href|src)="(?:(?:https?:\/\/[\w\-]+\.[a-z]{2,})|(?:\/?([^/]+)))\//gi,
				replaceTo: '$1="{{$publicPath}}/$2/'
			}, { 
				//фиксим нужные внешние скрипты (Google)
				reg: /(href|src)=".*(https:\/\/fonts\.g.*\.com.*)"/gi,
				replaceTo: '$1="$2"'
			}, {
				//заменяем мета тег og:url
				reg: /"og:url"\scontent="https?:\/\/[^/]+\.[a-z]{2,}\/?/i,
				replaceTo: '"og:url" content="http://{{$host}}/{{$thread}}'
			}, {
				//заменяем мета тег og:image 1. удаляем домен
				reg: /"og:image"\scontent="(?:(?:https?:\/\/[\w\-]+\.[a-z]{2,})|(\/[^/]+\/))\//gi,
				replaceTo: '"og:image" content="{{$publicPath}}/'
			}, {
				//заменяем путь для privacypolicy
				reg: /href=".*privacypolicy"/i,
				replaceTo: 'href="{{$publicPath}}/privacypolicy.html"'
			}, {
				//Удаляем яндекс метрику
				reg: /<!--{-->[\s\S]*<!--}-->/gmi,
				replaceTo: ''
			}, {
				//Меняем action у формы
				reg: /action="\/?order"/ig,
				replaceTo: 'action="/{{$thread}}/order"'
			}
		]);
		
		//удаляем лишние скрипты
		let text = await fs.readFileAsync(`${destLandDir}/index.html`, 'utf-8');
		const resReg = text.match(/(?:<link|<script).*(?:src|href)=".*".*>.*(?:<\/link>|<\/script>)/gi);
		if (resReg) {
			const itemsForRemove = resReg.reduce((arr, item) => {
				if (/\.(?:js|css)/i.test(item)) {
					return arr;
				}
				
				arr.push(item);
				return arr;
			}, []);
			
			itemsForRemove.forEach(item => {
				text = text.replace(item, '');
			});
			
			await fs.writeFileAsync(`${destLandDir}/index.html`, text, 'utf-8');
		}
		
		const newLandFiles = await recursiveReadAsync(destLandDir);
			
		console.log('подменяем пути во всех js');
		await Promise.all(newLandFiles.map(file => {
			if (/\.js/i.test(file)) {
				return readAndReplace(file, [{
					//картинки
					reg: /(href|src)="\/?([^/]+)\//gi,
					replaceTo: `$1="/landing/${landingName}/$2/`
				}]);
			}
			
			return Promise.resolve();
		}));
		
		console.log('подменяем пути во всех css');
		await Promise.all(newLandFiles.map(file => {
			if (/\.css/i.test(file)) {
				return readAndReplace(file, [{
					//картинки
					reg: /(background:url\("?\/)([^/]+)\//gi,
					replaceTo: `$1landing/${landingName}/$2/`
				}]);
			}
			
			return Promise.resolve();
		}));
		
		const viewsDir = `./resources/views/landings`;
		await fs.copyFileAsync(`${destLandDir}/index.html`, `${viewsDir}/${landingName}.blade.php`);
		
		console.log('убираем за собой...');
		
		await Promise.all([
			removeLandDir(),
			fs.unlinkAsync(`${destLandDir}/index.html`)
		]);
		
		await readAndReplace(`${destLandDir}/privacypolicy.html`, [{
			reg: /(href|src)="(?:(?:https?:\/\/[\w\-]+\.[a-z]{2,})|(?:\/?([^/]+)))\//gi,
			replaceTo: `$1="/landing/${landingName}/$2/`
		}]);

		console.log("создаем success.html");
		await fs.copyFileAsync('./loadLanding/success.html', `${destLandDir}/success.html`);
		await readAndReplace(`${destLandDir}/success.html`, [{
			reg: /(href|src)="(?:(?:https?:\/\/[\w\-]+\.[a-z]{2,})|(?:\/?([^/]+)))\//gi,
			replaceTo: `$1="/landing/${landingName}/$2/`
		}]);
	} catch (err) {
		onError(err);
	}
		
})();