const gulp = require('gulp'),
      sass = require('gulp-sass'),
      autoprefixer = require('gulp-autoprefixer')
      browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('browser-sync', () =>
    browserSync.init({
        proxy: 'http://127.0.0.1:8000/'
    })
);

gulp.task('sass', ()=>
    gulp.src(['node_modules/bootstrap/scss/bootstrap.scss','./sass/*.scss'])
        .pipe(sass({
            //outputStyle: 'compressed'
            outputStyle: 'expanded',
            sourceComments: true
        }))
        .pipe(autoprefixer({
            versions: ['last 2 browsers']
        }))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream())
);

gulp.task('js', ()=>
        gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js','node_modules/jquery/dist/jquery.min.js','./js/*.js'])
            .pipe(gulp.dest('./js'))
            .pipe(browserSync.stream())
);

gulp.task('watch', ['browser-sync','sass','js'], ()=>
    gulp.watch("./**/*.php").on('change', browserSync.reload),
    gulp.watch("./**/*.html").on('change', browserSync.reload),
    gulp.watch("./js/*.js").on('change', browserSync.reload),
    gulp.watch('./sass/*.scss', ['sass'])
);

gulp.task('default', ['browser-sync','sass','js','watch']);