// VARIABLES
const gulp          = require('gulp');
const concat        = require('gulp-concat');
const sass          = require('gulp-sass');
const postcss       = require('gulp-postcss');
const autoprefixer  = require('autoprefixer');
const flexboxfixer  = require('postcss-flexboxfixer');
const uglify        = require('gulp-uglify');
const browserSync   = require('browser-sync').create();
const zip           = require('gulp-zip');

// FILES
gulp.task('files', function() {
    var bootstrap = gulp.src('node_modules/bootstrap/scss/**/*')
        .pipe(gulp.dest('scss/bootstrap'));
    var fontawesome = gulp.src('node_modules/@fortawesome/fontawesome-free/scss/**/*')
        .pipe(gulp.dest('scss/fontawesome'));
    var webfonts = gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/**/*')
        .pipe(gulp.dest('webfonts'));
    return (bootstrap, fontawesome, webfonts);
});

// CSS
gulp.task('sass', function() {
    return gulp.src(['scss/main.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(postcss([ flexboxfixer() ]))
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
    gulp.watch('js/**/*.js', gulp.series('js', 'zip'));
    gulp.watch('scss/**/*.scss', gulp.series('sass', 'zip'));
    gulp.watch('**/*.php', gulp.series('zip')).on('change', browserSync.reload);
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

gulp.task('default', gulp.series('files','sass','js','zip','serve'));

