// VARIABLES
var gulp        = require('gulp');
var concat      = require('gulp-concat');
var sass        = require('gulp-sass');
var uglify      = require('gulp-uglify');
var browserSync = require('browser-sync').create();
var zip         = require('gulp-zip');

// FILES
gulp.task('bootstrap', function() {
    return gulp.src('node_modules/bootstrap/scss/**/*')
        .pipe(gulp.dest('scss/bootstrap'));
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
        .pipe(uglify())
        .pipe(gulp.dest('build'))
        .pipe(browserSync.stream());
});

// SERVE
gulp.task('serve', function() {
    browserSync.init({
        // server: './'' // default server
        // proxy: 'http://localhost:8888/' // mamp
        proxy: 'http://localhost/your-website/' // usualy
    });
    gulp.watch('js/**/*.js', gulp.series('js'));
    gulp.watch('scss/**/*.scss', gulp.series('sass'));
    gulp.watch('**/*.php').on('change', browserSync.reload);
});

// ZIP
gulp.task('zip', function() {
    return gulp.src([
      '**/*',
      '!node_modules/**',
      '!dist/**'
      ])
      .pipe(zip('frontend.zip'))
      .pipe(gulp.dest('../'));
});

gulp.task('default', gulp.series('bootstrap','sass','js','serve'));

