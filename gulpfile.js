const {src,dest,series,watch} = require('gulp');
const sass = require('gulp-sass');
const stylus = require('gulp-stylus');
const nib = require('nib');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const notify = require('gulp-notify');
const browserSync = require('browser-sync').create();

//const connect = require('gulp-connect-php');


//function php(){
//	return(src('./app/*/*.php'));

//}

function css(){
	return src('./src/**/*.scss')
	.pipe(sass())
	.pipe(cleanCSS())
	.pipe(rename('styl.min.css'))
	.pipe(dest('./app/assets/css'));

}

/*
exports.css=css;
exports.default = () =>{};*/

function styles(){
	//return src('./src/stylus/styl.styl')
	return src('./src/stylus/*.styl')
	.pipe(stylus())
	.pipe(dest('./app/assets/css'))
	.pipe(notify("Stylus se compilo correctamente!"));
}
function watchTask(){
	//watch('./src/stylus/*/*.styl',styles);
	watch('./src/stylus/*.styl',styles);

}
exports.styles=styles;
exports.default = () =>{};

exports.default = series(styles, watchTask);




//Comandos ejecutados:
//mkdir js css sass img
//
//touch index.html ./sass/index.scs
//npm init -y
//touch gulpfile.js
//npm install --global gulp-cli
//npm install --save-dev gulp
//npm install --save-dev gulp-sass
//npm install --save-dev gulp-rename
//npm install gulp-clean-css --save-dev
//npm install --save-dev dart-sass
//npm install gulp-clean-css --save-dev
////npm install nib --save-dev
///////npm install gulp-stylus --save-dev

///////npm install gulp-notify --save-dev
//npm install browser-sync --save-dev