/**
 * Created by admin on 24.03.2017.
 */
var gulp = require('gulp'),
    gulpSass = require('gulp-sass'),
    bs = require('browser-sync'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify-es').default,
    jshint = require('gulp-jshint'),
    //del = require('del'),
    //imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer'),
    gulpSvgSprite = require('gulp-svg-sprite');


function sass() {
    return gulp.src('src/css/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(gulpSass().on('error', gulpSass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 10'], {cascade: false}))
        .pipe(sourcemaps.write('/', {
            sourceMappingURLPrefix: ''}))
        .pipe(gulp.dest('src/css'));
}

function css() {
    return gulp.src('src/css/main.css')
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('/', {
            sourceMappingURLPrefix: ''}))
        .pipe(gulp.dest('src/css'))
        .pipe(bs.reload({stream: true}));
}

function scriptsLint () {
    return gulp.src('src/js/main.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
}

function scripts() {
    return gulp.src(['src/js/main.js', '!src/js/main.min.js'])
        .pipe(concat('main.min.js'))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(uglify())
        .pipe(sourcemaps.write('/', {
            sourceMappingURLPrefix: ''}))
        .pipe(gulp.dest('src/js'));
}

function browserSync() {
    bs.init({
        proxy: 'petmode'
        //server: 'src'
    });
}

function getSvgSprite() {
    return gulp.src('src/img/sprite/*.svg')
        .pipe(gulpSvgSprite({
            mode: {
                stack: {
                    sprite: "../sprite.svg"  //sprite file name
                }
            }
        }))
        .pipe(gulp.dest('src/img'))
}

// Watch files
function watchFiles() {
    gulp.watch('src/css/scss/**/*.scss', {usePolling: true}, gulp.series(sass, css));
    gulp.watch('src/*.html').on("change", bs.reload);
    gulp.watch('src/*.php').on("change", bs.reload);
    gulp.watch(['src/js/main.js'], gulp.series(scriptsLint, scripts));
}

// define complex tasks
var watch = gulp.parallel(gulp.series(sass, css), gulp.series(scriptsLint, scripts), browserSync, watchFiles);
var sprite = gulp.parallel(getSvgSprite);

exports.watch = watch;
exports.sprite = sprite;

