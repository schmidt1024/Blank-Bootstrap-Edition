// VARIABLES
const { watch, series, src, dest } = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const flexboxfixer = require('postcss-flexboxfixer');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const zip = require('gulp-zip');

// FILES
function getFiles() {
    let bootstrap = src('node_modules/bootstrap/scss/**/*')
        .pipe(dest('scss/bootstrap/'));
    let fontawesome = src('node_modules/@fortawesome/fontawesome-free/scss/**/*')
        .pipe(dest('scss/fontawesome/'));
    let webfonts = src('node_modules/@fortawesome/fontawesome-free/webfonts/**/*')
        .pipe(dest('webfonts/'));
    return (bootstrap, fontawesome, webfonts);
}

// CSS
function prepareSass() {
    return src(['scss/main.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(postcss([ flexboxfixer() ]))
        .pipe(dest('build/'))
        .pipe(browserSync.stream());
}

// JS
function uglifyJavascript() {
    return src([
        'node_modules/jquery/dist/jquery.slim.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'js/script.js'
        ])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(dest('build/'))
        .pipe(browserSync.stream());
}

// ZIP
function zipTemplate() {
    return src([
        '**/*',
        '!node_modules/**',
        '!dist/**'
        ])
        .pipe(zip('frontend.zip'))
        .pipe(dest('../'));
}

// SERVE
function serveSite() {
    browserSync.init({
        // server: './'' // default server
        // proxy: 'http://localhost:8888/' // mamp
        proxy: 'http://localhost/your-website/' // usualy
    });
    watch('js/**/*.js', series(uglifyJavascript, zipTemplate));
    watch('scss/**/*.scss', series(prepareSass, zipTemplate));
    watch('**/*.php', series(zipTemplate)).on('change', browserSync.reload);
}

// DEFAULT
exports.default = series(
    getFiles,
    prepareSass,
    uglifyJavascript,
    zipTemplate,
    serveSite
);
