var Promise         = require('es6-promise').Promise,
    gulp            = require('gulp'),
    colors          = require('colors'),
    filesize        = require('gulp-filesize'),
    del             = require('del'),
    argv            = require('yargs').argv,
    gulpif          = require('gulp-if'),
    sourcemaps      = require('gulp-sourcemaps'),
    postcss         = require('gulp-postcss'),
    sass            = require('gulp-sass'),
    sasslint        = require('gulp-sass-lint'),
    autoprefixer    = require('gulp-autoprefixer'),
    cleanCSS        = require('gulp-clean-css'),
    concat          = require('gulp-concat'),
    uglify          = require('gulp-uglify'),
    jshint          = require('gulp-jshint'),
    imagemin        = require('gulp-imagemin'),
    pngquant        = require('imagemin-pngquant'),
    mkdirp          = require('mkdirp'),
    createFile      = require('create-file');
//=======options==============================================================================
var src         = "assets",
    dest        = "assets",
    //css locations
    css_file    = "style",
    css_src     = src + "/scss",
    css_dest    = dest + "/css",
    //js locations
    js_file     = "site",
    js_src      = src + "/js",
    js_dest     = dest + "/",
    //image locations
    image_src   = src + "/images",
    image_dest  = dest + "/images";


//=======default task=========================================================================
gulp.task('default',['watch']);

//=======help=================================================================================
gulp.task('help', function(){
  console.log("=============================================================".bold.green);
  console.log("copy --src folder  = copy folder from dev to build (for fonts json..");
  console.log("css                = sourcemaps | sass | prefix | minimize | filesize".cyan);
  console.log("js                 = concat | jshint | filesize".yellow);
  console.log("image              = optimize images and save to build dir".magenta);
  console.log("watch (default)    = css && js".bold.green);
  console.log("build              = css, js --production & image".grey);
  console.log("=============================================================".bold.yellow);
});


//=======stylesheet===========================================================================
//sourcemaps | sass | prefix | minimize | filesize
gulp.task('css', function(){
  return gulp.src('assets/scss/site.scss')
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(autoprefixer({browsers: "last 2 versions"}))
  .pipe(cleanCSS({ compatibility: 'ie9' }))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('assets/build/'))
  .pipe(filesize());
});

//=======javascript===========================================================================
//sourcemaps | minimize | filesize
gulp.task('js', function(){
  return gulp.src(['assets/js/site.js'])
  .pipe(jshint())
  .pipe(jshint.reporter('jshint-stylish'))
  .pipe(sourcemaps.init())
  .pipe(uglify())
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('assets/build/'))
  .pipe(filesize());
});

//=======images===============================================================================
gulp.task('image', function(){
  return gulp.src('assets/images/**')
  .pipe(imagemin({
      progressive: true,
      svgPlugins: [{removeViewBox: false}],
      use: [pngquant()]
  }))
  .pipe(gulp.dest('assets/images/'));
});

//=======copy files===========================================================================
gulp.task('copy', function(){
  return gulp.src(src + "/" + argv.src + "/**")
  .pipe(gulp.dest(dest + "/" + argv.src))
});
//=======watch================================================================================
gulp.task('watch',function(){
  gulp.watch('assets/scss/**', ['css']);
  gulp.watch(['assets/js/**'],['js']);
});

//=======BUILD================================================================================
gulp.task('build',['css', 'js', 'image']);