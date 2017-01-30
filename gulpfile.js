//=======================================================================
// VARIABLES
//=======================================================================

var gulp       		= require('gulp');
var uglify     		= require('gulp-uglify');
var cleanCSS 		= require('gulp-clean-css');
var concat     		= require('gulp-concat');
var less       		= require('gulp-less');
var autoprefix 		= require('gulp-autoprefixer');
var convertEncoding = require('gulp-convert-encoding');
var notify     		= require('gulp-notify');



//=======================================================================
// WATCH
//=======================================================================

gulp.task('watch', function(){

	// TEMPLATE
	gulp.watch('js/**/*.js',['template-js']);
	gulp.watch('css/**/*.less',['template-less']);
	gulp.watch('css/**/*.css', ['template-css']);

});



//=======================================================================
// TEMPLATE
//=======================================================================

// JAVASCRIPT

gulp.task('template-js', function () {
	return gulp.src([
		'js/bootstrap.min.js',
		'js/script.js'
		])
		.pipe(uglify())
		.pipe(concat('app.js'))
		.pipe(convertEncoding({to: 'utf8'}))
		.pipe(gulp.dest('build'))
		.pipe(notify({message:'template -> app.js'}));
});



// LESS

gulp.task('template-less', function () {
	gulp.src([
		'css/template.less'
		])
		.pipe(less())
		.pipe(autoprefix('last 10 versions', 'ie 9', 'ie 8'))
		.pipe(gulp.dest('css'))
		.pipe(notify({message:'template -> less -> css'}));
});



// CSS

gulp.task('template-css', function () {
	gulp.src([
		'css/template.css'
		])
		.pipe(cleanCSS())
		.pipe(concat('style.css'))
		.pipe(gulp.dest('build'))
		.pipe(notify({message:'template -> style.css'}));
});
