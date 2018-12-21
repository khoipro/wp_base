const gulp = require('gulp')
const sass = require('gulp-sass')
const sourcemaps = require('gulp-sourcemaps')
const plumber = require('gulp-plumber')
const uglifiy = require('gulp-uglify')
const autoprefixer = require('gulp-autoprefixer')
const browserify = require('gulp-browserify')
const livereload = require('gulp-livereload')
const standard = require('gulp-standard')
const babel = require('gulp-babel')
const cssDest = 'assets/css/'
const jsDest = 'assets/js/'

const autoprefixerOptions = {
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
    .pipe(babel())
    .pipe(plumber())
    .pipe(sourcemaps.write())
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
