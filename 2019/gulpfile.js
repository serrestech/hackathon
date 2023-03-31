'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var webserver = require('gulp-webserver');

function mysass() {
  return gulp
    .src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano())
    .pipe(gulp.dest('./css'));
}

function sasswatch() {
  return gulp.watch('./sass/**/*.scss', mysass);
}

function serve() {
  return gulp
    .src('./')
    .pipe(webserver({
      livereload: true,
      open: true
    }));
}

// Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
var build = gulp.parallel(mysass, serve);

exports.mysass = mysass;
exports.serve = serve;
exports.build = build;

// Define default task that can be called by just running `gulp` from cli
exports.default = build;
