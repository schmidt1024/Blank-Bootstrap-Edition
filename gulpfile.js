var gulp = require('gulp'),
	// jshint = require('gulp-jshint'),
	// csslint = require('gulp-csslint'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	less = require('gulp-less'),
	autoprefix = require('gulp-autoprefixer');

gulp.task('js', function () {
	return gulp.src([
		'js/bootstrap.min.js',
		'js/script.js'
		])
		.pipe(concat('app.js'))
		.pipe(gulp.dest('build'));
});

gulp.task('css', function () {
	gulp.src('css/template.less')
		.pipe(less())
		.pipe(autoprefix('last 2 version', 'ie 8', 'ie 9'))
		.pipe(gulp.dest('css'));
	gulp.src([
		'css/bootstrap.css', 
		'css/font-awesome.css', 
		'css/template.css'
		])
    	.pipe(concat('style.css'))
		.pipe(gulp.dest('build'));
});

gulp.task('watch', function(){
	gulp.watch('js/**/*.js',['js']);
	gulp.watch('css/**/*.less',['css']);
});