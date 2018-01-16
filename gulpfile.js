var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');
var uglifiy = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');

var cssDest = 'assets/css/',
	jsDest = 'assets/js/';

var autoprefixerOptions = {
	browsers: ['last 3 versions', '> 5%', 'Firefox ESR']
};

gulp.task('styles', function(){
	gulp.src('src/scss/main.scss')
		.pipe(sourcemaps.init())
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write())
		.pipe(plumber.stop())
		.pipe(autoprefixer(autoprefixerOptions))
		.pipe(gulp.dest(cssDest));
});

gulp.task('scripts', function() {
	gulp.src('src/js/main.js')
		.pipe(browserify())
		.pipe(uglifiy())
		.pipe(gulp.dest(jsDest));
});

gulp.task('watch',function() {
	gulp.watch('src/scss/**/*.scss',['styles']);
	gulp.watch('src/js/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts', 'watch']);
