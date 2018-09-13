var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps'),
	notify = require('gulp-notify');

gulp.task('sass', function(){
	return gulp.src('assets/styles/*.scss')
	.pipe( sourcemaps.init() )
	.pipe( sass().on('error', sass.logError))
	.pipe(autoprefixer({
		browsers: ['last 10 versions'],
		cascade: false
	}))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(''))
	.pipe(notify({message: 'SASS task completed', onLast: true }))
});


gulp.task('default', ['sass'], function(){
	gulp.watch('**/*.scss', ['sass']);
});