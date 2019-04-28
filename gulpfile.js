const gulp = require('gulp');

// Include Our Plugins
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

// Compile Our Sass
gulp.task('sass', function() {
	return gulp.src('wp-content/themes/tax-theme/sass/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass.sync({outputStyle:"compressed"}).on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('wp-content/themes/tax-theme/'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('wp-content/themes/tax-theme/javascript/assets/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('javascript'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/tax-theme/sass/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);