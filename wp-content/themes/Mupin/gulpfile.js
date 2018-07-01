const gulp = require('gulp'),
  sass = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer');
  browserSync = require('browser-sync'); 

gulp.task('sass',() =>
  gulp.src('./src/scss/styles.scss')
    .pipe(sass({
      outputStyle: 'expanded'
    })) 
    .pipe(autoprefixer(
			'last 2 version',
			'> 1%',
			'safari 5',
			'ie 8',
			'ie 9',
			'opera 12.1',
			'ios 6',
      'android 4' ))
    .pipe(gulp.dest('./assets/css'))
);

gulp.task('sass-watch',['sass'], browserSync.reload);

gulp.task('default', () => {
  browserSync.init({ 
    port: 8887,
    server: {
      baseDir: '/'
    }
  });
  gulp.watch('./src/scss/styles.scss', ['sass-watch'])
})