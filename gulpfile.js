var gulp = require('gulp'),
    imagemin = require('gulp-imagemin'),
    usemin = require('gulp-usemin'),
    minifyHTML = require('gulp-minify-html'),
    uglify = require('gulp-uglify');

var TARGET = 'build/';

gulp.task('fonts', function() {
  return gulp.src('./statics/fonts/**/*')
          .pipe(gulp.dest(TARGET + 'statics/fonts'));
});

gulp.task('images', function() {
  return gulp.src('./statics/images/**/*')
          .pipe(imagemin({optimizationLevel: 3}))
          .pipe(gulp.dest(TARGET + 'statics/images'));
});

gulp.task('usemin', function() {
  return gulp.src('*.html')
          .pipe(usemin({}))
          .pipe(gulp.dest(TARGET));
});

gulp.task('default', ['fonts', 'images', 'usemin']);
