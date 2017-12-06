'use strict';
const Promise            = require('bluebird');
const exec               = Promise.promisify(require('child_process').exec);
const fs                 = Promise.promisifyAll(require('fs'));
const rimraf             = Promise.promisify(require('rimraf'));
const ncp                = Promise.promisify(require('ncp').ncp);
const recursiveReadAsync = Promise.promisify(require('recursive-readdir'));
//собираем аргументы
/*const args = process.argv
	.slice(2)
	.reduce((ob, arg) => {
		const argKV = arg.split('=');
		if (argKV.length === 2) {
			ob[argKV[0]] = argKV[1];
			return ob;
		}

		return ob;

	}, {});*/

//console.log('args: ', args);
//console.log('args1 : ', process.argv);
const landingName = process.argv[2];
const url         = process.argv[3];

console.log('url', url);
//process.exit(0);
const landDir = './__land';
(async () => {
	const removeLandDir = async () => {
		return await rimraf(landDir);
	};

	const onError = async (err, message) => {
		console.log(message, err);
		await removeLandDir();
		process.exit(0);
	};

	try {
		await fs.mkdirAsync(landDir);
	} catch (err) {
		onError('err: ', err);
	}

	console.log("Download files...");

	try {
		await exec(`wget -P ${landDir} -Hpr "${url}"`);
	} catch (err) {
		onError("ERROR: " + error);
	}
		
	console.log('ok! Files has been downloaded');

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

	try {
		await Promise.all(filesForRename.map(file => {
			return fs.renameAsync(file, file.replace(reg, ""));
		}));
	} catch (err) {
		onError('переименовывание с ошибкой', err);
	}

	console.log('создаем каркас...');
	await Promise.all(['img', 'js', 'css'].map(file => {
		return fs.mkdirAsync(`${landDir}/${file}`);
	}));

	const landFiles = await recursiveReadAsync(landDir);

	console.log('копируем файлы в каркас');
	try {
		await Promise.all(landFiles.map(file => {
			const fileName = file.replace(/.*\//, '');
			//копируем js
			if(/.*\.js$/.test(fileName)) {
				return fs.copyFileAsync(file, `${landDir}/js/${fileName}`);
			}

			//копируем css
			if (/.*\.css$/.test(fileName)) {
				return fs.copyFileAsync(file, `${landDir}/css/${fileName}`);
			}

			//копируем img
			if (/.*\.(png)|(jpg)|(jpeg)|(bmp)$/.test(fileName)) {
				return fs.copyFileAsync(file, `${landDir}/img/${fileName}`); 
			}

			//копируем index.html
			if (fileName === "index.html") {
				return fs.copyFileAsync(file, `${landDir}/${fileName}`); 
			}

			//копируем privacypolicy
			if (fileName === 'privacypolicy') {
				return fs.copyFileAsync(file, `${landDir}/${fileName}.html`);
			}

			return Promise.resolve();
		}));
	} catch(err) {
		onError(err);
	}

	console.log('копируем файлы в public');
	const destLandDir = `./public/landing/${landingName}`;

	try {
		await fs.mkdirAsync(destLandDir);
		await Promise.all([
			ncp(`${landDir}/img/`, `${destLandDir}/img/`),
			ncp(`${landDir}/index.html`, `${destLandDir}/index.html`),
			ncp(`${landDir}/privacypolicy.html`, `${destLandDir}/privacypolicy.html`),
			ncp(`${landDir}/css/`, `${destLandDir}/css/`),
			ncp(`${landDir}/js/`, `${destLandDir}/js/`),
		]);
	} catch (err) {
		onError(err);
	}
	
	const readAndReplace = async (file, regHashes) => {
		let text = await fs.readFileAsync(file, 'utf-8');
		const changedText = regHashes.reduce((textToChange, hash) => {
			return textToChange.replace(hash.reg, hash.replaceTo);
		}, text);
		return fs.writeFileAsync(file, changedText, 'utf-8');
	};
	
	console.log("исправляем пути.... index.html");
	try {
		await fs.unlinkAsync(`${destLandDir}/js/unload_submit.js`);
		await readAndReplace(`${destLandDir}/index.html`, [{
				//Удаляем ненужный файл
				reg: /<script.*src=".*unload_submit\.js.*">.*<\/script>/,
				replaceTo: ""
			}, { 
				//заменяем внешние ссылки
				reg: /(href|src)="https?:\/\/[\w\-]+\.[a-z]{2,}\//gi,
				replaceTo: '$1="/'
			}, {
				//заменяем пути для картинок
				reg: /(src|href)="\/?.*\/([0-9@a-z_\-]+\.(?:jpg|png|bmp))"/gi,
				replaceTo: '$1="{{$publicPath}}/img/$2"'
			}, {
				//заменяем пути для js
				reg: /src="\/?.*\/([0-9a-z_.\-]+\.js)(?:\?[0-9]+)?"/gi,
				replaceTo: 'src="{{$publicPath}}/js/$1"'
			}, {
				//заменяем пути для css
				reg: /href="\/?.*\/([0-9a-z._\-]+\.css)(?:\?[0-9]+)?"/gi,
				replaceTo: 'href="{{$publicPath}}/css/$1"'
			}, {
				//заменяем мета тег og:url
				reg: /"og:url"\scontent="https?:\/\/[\w\-]+\.[a-z]{2,}\/?/i,
				replaceTo: '"og:url" content="http://{{$host}}/{{$thread}}'
			}, {
				//заменяем мета тег og:image 1. удаляем домен
				reg: /"og:image"\scontent="https?:\/\/[\w\-]+\.[a-z]{2,}/i,
				replaceTo: '"og:image" content="'
			}, {
				//заменяем мета тег og:image 2. меняем путь
				reg: /"og:image"\scontent="\/?.*\/([0-9a-z_\-]+\.(?:jpg|png|bmp))"/i,
				replaceTo: '"og:image" content="{{$publicPath}}/img/$1"'
			}, {
				//заменяем путь для privacypolicy
				reg: /href="\/?privacypolicy"/i,
				replaceTo: 'href="{{$publicPath}}/privacypolicy.html"'
			}, {
				//Удаляем яндекс метрику
				reg: /<!--{-->[\s\S]*<!--}-->/gmi,
				replaceTo: ''
			}, {
				//Меняем action у формы
				reg: /action="\/?order"/i,
				replaceTo: 'action="/{{$thread}}/order"'
			}
		]);
	} catch (err) {
		onError(err);
	}
	
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
	
	try {
		const jsFiles = await fs.readdirAsync(`${destLandDir}/js`);
			
		console.log('подменяем пути во всех js');
		await Promise.all(jsFiles.map(file => {
			return readAndReplace(`${destLandDir}/js/${file}`, [{
				//картинки
				reg: /(src|href)="\/?.*\/([0-9@a-z_\+\'\-\s.]+\.(?:jpg|png|bmp))"/gi,
				replaceTo: `$1="/landing/${landingName}/img/$2"`
			}]);
		}));
	} catch (err) {
		onError(err);
	}
	
	const viewsDir = `./resources/views/landings`;
	try {
		await fs.copyFileAsync(`${destLandDir}/index.html`, `${viewsDir}/${landingName}.blade.php`);
		
		console.log('убираем за собой...');
		
		await Promise.all([
			removeLandDir(),
			fs.unlinkAsync(`${destLandDir}/index.html`)
		]);
		
		await readAndReplace(`${destLandDir}/privacypolicy.html`, [{
			reg: /(src|href)="\/?.*\/([0-9@a-z_\-]+\.(?:jpg|png|bmp))"/gi,
			replaceTo: '$1="{{$publicPath}}/img/$2"'
		}]);
		
		
	} catch (err) {
		onError(err);
	}
})();