'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// Styles Task
gulp.task('styles', function() {
  return gulp.src('./sass/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function(){
    gulp.watch('./sass/*.sass', gulp.series('styles'));
});