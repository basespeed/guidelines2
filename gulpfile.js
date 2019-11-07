var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');
var minifyCss = require('gulp-clean-css');

// Compile Our Sass
gulp.task('sass', function () {
    return gulp.src('./resources/sass/style.scss')
        .pipe(sass())
        .pipe(minifyCss())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./resources/css'))
        .pipe(livereload());
});

// Watch Files For Changes
gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(['./resources/sass/**/*'], ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'watch']);


