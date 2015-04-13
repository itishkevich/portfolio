var gulp = require('gulp'),
	connect = require('gulp-connect'),
	open = require('opn'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer');

// connect
gulp.task('connect', function () {
	connect.server({
		root: 'app',
		livereload: true,
		port: 8888
	});
	open('http://localhost:8888');
});

// html
gulp.task('html', function () {
	gulp.src('./app/*.html')
		.pipe(connect.reload());
});

// css
gulp.task('css', function () {
	gulp.src('./app/css/*.css')
		.pipe(connect.reload());
});

// compile Sass
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
	gulp.watch(['./app/*.html'], ['html']);
	gulp.watch(['./app/css/*.css'], ['css']);
	gulp.watch('./app/scss/*.scss', ['sass']);
	gulp.watch(['./app/js/*.js'], ['js']);
});

// default task
gulp.task('default', ['connect', 'watch']);