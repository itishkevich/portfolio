var gulp = require('gulp'),
	connect = require('gulp-connect'),
	open = require('opn'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css'),
	minifyHTML = require('gulp-minify-html'),
	uglify = require('gulp-uglify'),
	clean = require('gulp-clean'),
	usemin = require('gulp-usemin');

// connect
gulp.task('connect', function () {
	connect.server({
		root: 'app',
		livereload: true
	});
	open('http://itishkevich.local/');
});

// php
gulp.task('php', function () {
	gulp.src('./app/*.php')
		.pipe(connect.reload());
});

// css
gulp.task('css', function () {
	gulp.src('./app/css/*.css')
		.pipe(connect.reload());
});

// compile sass
gulp.task('sass', function() {
	return gulp.src('./app/scss/*.scss')
		.pipe(sass({
			noCache: true,
			style: "expanded",
			lineNumbers: true,
			errLogToConsole: true
		}))
		.pipe(autoprefixer({
			browsers: ['last 2 versions', 'ie 8', 'ie 9'],
			cascade: false
		}))
		.pipe(gulp.dest('./app/css'));
});

// js
gulp.task('js', function () {
	gulp.src('./app/js/*.js')
		.pipe(connect.reload());
});

// watcher
gulp.task('watch', function () {
	gulp.watch(['./app/*.php'], ['php','build']);
	gulp.watch(['./app/scss/*.scss'], ['sass']);
	gulp.watch(['./app/css/*.css'], ['css','build']);
	gulp.watch(['./app/js/*.js'], ['js','build']);
});

// default task
gulp.task('default', ['connect', 'watch']);


// Build
var path = {
	build: {
		php: './dist/',
		phpsrc: './dist/php/',
		css: './dist/css/',
		js: './dist/js/',
		jsvendor: './dist/js/vendor/',
		includes: './dist/includes/',
		img: './dist/img/',
		fonts: './dist/fonts/'
	},
	src: {
		php: './app/*.php',
		phpsrc: './app/php/**/*.*',
		css: './app/css/**/*.css',
		js: './app/js/vendor/*',
		uglifyjs: './app/js/*.js',
		includes: './app/includes/*.php',
		img: './app/img/**/*.*',
		fonts: './app/fonts/**/*.*'
	},
	watch: {
		php: './app/**/*.php',
		css: './app/css/**/*.css',
		js: './app/js/**/*.js',
		includes: './app/includes/*.php',
		img: './app/img/**/*.*',
		fonts: './app/fonts/**/*.*'
	},
	clean: './dist'
};

gulp.task('php:build', function () {
	gulp.src(path.src.phpsrc)
		.pipe(gulp.dest(path.build.phpsrc));
	gulp.src(path.src.includes)
		.pipe(gulp.dest(path.build.includes));
	gulp.src(path.src.php)
		.pipe(minifyHTML({
			empty:true,
			conditionals:true,
			quotes:true,
			comments:true
		}))
		.pipe(usemin())
		.pipe(gulp.dest(path.build.php));
});

gulp.task('css:build', function () {
	gulp.src(path.src.css)
		.pipe(minifyCSS())
		.pipe(gulp.dest(path.build.css));
});

gulp.task('js:build', function () {
	gulp.src(path.src.js)
		.pipe(gulp.dest(path.build.jsvendor));
	gulp.src(path.src.uglifyjs)
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js));
});

gulp.task('img:build', function () {
	gulp.src(path.src.img)
		.pipe(gulp.dest(path.build.img));
});

gulp.task('fonts:build', function() {
	gulp.src(path.src.fonts)
		.pipe(gulp.dest(path.build.fonts));
});

// build cleaner
gulp.task('clean', function () {
	return gulp.src('./dist', {read: false})
		.pipe(clean());
});

gulp.task('build', ['php:build','css:build','js:build','img:build','fonts:build']);