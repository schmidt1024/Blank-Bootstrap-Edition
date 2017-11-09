// VARIABLES
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');

// FILES
gulp.task('files', function() {
    gulp.src('node_modules/bootstrap/scss/**/*')
        .pipe(gulp.dest('scss/bootstrap'));
    gulp.src('node_modules/font-awesome/scss/**/*')
        .pipe(gulp.dest('scss/font-awesome'));
    gulp.src('node_modules/font-awesome/fonts/**/*')
        .pipe(gulp.dest('fonts'));
});

// CSS
gulp.task('sass', function() {
    return gulp.src(['scss/main.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('build'))
        .pipe(browserSync.stream());
});

// JS
gulp.task('js', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.slim.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'js/script.js'
        ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('build'))
        .pipe(browserSync.stream());
});

// SERVE
gulp.task('serve', ['sass'], function() {
    browserSync.init({
        // server: './'' // default server
        // proxy: 'http://localhost:8888/' // mamp
        proxy: 'http://localhost/blank/' // usualy
    });
    gulp.watch(['js/**/*.js'], ['js']);
    gulp.watch(['scss/**/*.scss'], ['sass']);
    gulp.watch("*.php").on('change', browserSync.reload);
});

gulp.task('default', ['files','sass','js','serve']);

