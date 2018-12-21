var gulp = require('gulp')
var sass = require('gulp-sass')
var sourcemaps = require('gulp-sourcemaps')
var plumber = require('gulp-plumber')
var uglifiy = require('gulp-uglify')
var autoprefixer = require('gulp-autoprefixer')
var browserify = require('gulp-browserify')
var livereload = require('gulp-livereload')
var standard = require('gulp-standard')
var cssDest = 'assets/css/',
  jsDest = 'assets/js/'

var autoprefixerOptions = {
  browsers: ['last 3 versions', '> 5%', 'Firefox ESR']
}

gulp.task('styles', function () {
  gulp.src('src/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(plumber.stop())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest(cssDest))
    .pipe(livereload())
})

gulp.task('scripts', function () {
  gulp.src('src/js/*.js')
    .pipe(sourcemaps.init())
    .pipe(standard())
    .pipe(standard.reporter('default', {
      breakOnError: true,
      quiet: true
    }))
    .pipe(plumber())
    .pipe(browserify())
    .pipe(uglifiy())
    .pipe(gulp.dest(jsDest))
})

gulp.task('watch', function () {
  livereload.listen()
  gulp.watch('src/scss/**/*.scss', ['styles'])
  gulp.watch('src/js/**/*.js', ['scripts'])
})

gulp.task('build', ['styles', 'scripts'])
gulp.task('default', ['styles', 'scripts', 'watch'])
