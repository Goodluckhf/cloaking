'use strict';
const Promise            = require('bluebird');
const exec               = Promise.promisify(require('child_process').exec);
const fs                 = Promise.promisifyAll(require('fs'));
const recursiveReadAsync = Promise.promisify(require('recursive-readdir'));
const ncp = Promise.promisify(require('ncp').ncp);
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
		return await fs.rmdirAsync(landDir);
	};

	const onError = async (err, message) => {
		console.log(message, err);
		//await removeLandDir();
		process.exit(0);
	};

/*	try {
		await fs.mkdirAsync(landDir);
	} catch (err) {
		onError('err: ', err);
	}

	console.log("Download files...");

	try {
		await exec(`wget -P ${landDir} -Hpr "${url}"`);
	} catch (err) {
		onError("ERROR: " + error);
	}*/
		
	console.log('ok! Files has been downloaded');

	const reg = /\?.*/i;

/*	const getFilesForRename = async () => {
		const landFiles = await recursiveReadAsync(landDir);
		console.log('landFiles', landFiles);
		return landFiles.reduce((arr, file) => {
			if (reg.test(file)) {
				arr.push(file);
			}

			return arr;
		}, []);
	};

	const filesForRename = await getFilesForRename();
	console.log("переименовываем файлы ", filesForRename);

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
	}*/

	console.log('копируем файлы в public');
	const destLandDir = `./public/landing/${landingName}`;

	/*try {
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
	}*/
	
	const readAndReplace = async (file, regHashes) => {
		let text = await fs.readFileAsync(file, 'utf-8');
		const changedText = regHashes.reduce((text, hash) => {
			return text.replace(hash.reg, hash.replaceTo);
		}, text);
		return fs.writeFileAsync(file, changedText, 'utf-8');
	};
	
	console.log("исправляем пути....");
	try {
		//await fs.unlinkAsync(`${destLandDir}/js/unload_submit.js`);
		await readAndReplace(`${destLandDir}/index.html`, [{
				reg: /<script.*src=".*unload_submit\.js.*">.*<\/script>/,
				replaceTo: ""
			}, {
				reg: /=".*\.(png)|(jpg)|(jpeg)|(bmp)"$/,
				replaceTo: ""
			}		
		]);
	} catch (err) {
		onError(err);
	}
	

	console.log('result>>>>:  ');
})();