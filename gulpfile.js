"use strict";

const path = require("node:path");
const {dest, series, src, watch} = require("gulp");
const browserSync = require("browser-sync").create();
const plumber = require("gulp-plumber");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const csso = require("gulp-csso");
const rename = require("gulp-rename");
const posthtml = require("gulp-posthtml");
const include = require("posthtml-include");
const htmlmin = require("gulp-htmlmin");
const {includePaths} = require("scss-resets");

let delModulePromise;
let imageminModulePromise;
let webpModulePromise;

function loadDel() {
  delModulePromise ??= import("del");
  return delModulePromise;
}

function loadImagemin() {
  imageminModulePromise ??= import("gulp-imagemin");
  return imageminModulePromise;
}

function loadWebp() {
  webpModulePromise ??= import("gulp-webp");
  return webpModulePromise;
}

function css() {
  return src("source/sass/style.scss")
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
      loadPaths: [
        ...includePaths,
        path.join(__dirname, "node_modules", "normalize-scss", "sass")
      ]
    }).on("error", sass.logError))
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(csso())
    .pipe(rename("style.min.css"))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css"))
    .pipe(browserSync.stream());
}

function server() {
  browserSync.init({
    server: "build/",
    notify: false,
    open: true,
    cors: true,
    ui: false
  });

  watch("source/sass/**/*.{scss,sass}", css);
  watch("source/img/icon-*.svg", series(html, refresh));
  watch("source/*.html", series(html, refresh));
  watch("source/js/*.js", series(jscompress, refresh));
}

async function images() {
  const imageminModule = await loadImagemin();

  return src("source/img/*.{png,jpg,svg}", {encoding: false})
    .pipe(imageminModule.default([
      imageminModule.optipng({optimizationLevel: 3}),
      imageminModule.mozjpeg({progressive: true}),
      imageminModule.svgo()
    ]))
    .pipe(dest("source/img", {encoding: false}));
}

async function webpTask() {
  const {default: webp} = await loadWebp();

  return src("source/img/*.{png,jpg}", {encoding: false})
    .pipe(webp({quality: 90}))
    .pipe(dest("source/img", {encoding: false}));
}

function html() {
  return src("source/*.html")
    .pipe(posthtml([
      include()
    ]))
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(dest("build"));
}

function jscompress() {
  return src("source/js/*.js")
    .pipe(dest("build/js"));
}

function copy() {
  return src([
    "source/fonts/**/*.{woff,woff2}",
    "source/img/**",
    "source/*.ico"
  ], {
    base: "source",
    encoding: false
  })
    .pipe(dest("build", {encoding: false}));
}

async function clean() {
  const {deleteAsync} = await loadDel();
  return deleteAsync(["build"]);
}

function refresh(done) {
  browserSync.reload();
  done();
}

const build = series(
  clean,
  jscompress,
  copy,
  css,
  html
);

exports.build = build;
exports.clean = clean;
exports.copy = copy;
exports.css = css;
exports.html = html;
exports.images = images;
exports.jscompress = jscompress;
exports.refresh = refresh;
exports.server = server;
exports.start = series(build, server);
exports.webp = webpTask;
