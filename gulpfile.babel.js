"use strict";

import { src, dest, series  } from "gulp";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";

const paths = {
    css: [
      "./src/css/fonts.css",
      "./src/css/animations.css",
      "./src/css/base.css",
      "./src/css/layout.css",
      "./src/css/state.css",
      "./src/css/module.css"
    ],
    scriptsHead: [
      "./src/js/head/scrollReveal.js",
      "./src/js/head/load_img.js",
    ],
    scriptsFooter: [
      "./src/js/footer/**/*.js"
    ]
  }
  
  const dirs = {
    dest: "./dist"
  }

  export const styles = () => src( paths.css, { sourcemaps: true } )
    .pipe(concat("core.min.css"))
    .pipe(cleanCSS({ compatibility: "*"}))
    .pipe(dest(dirs.dest, { sourcemaps: true }))

  export const jsHead = () => src(paths.scriptsHead)
    .pipe(concat("jsHead.min.js"))
    .pipe(uglify())
    .pipe(dest(dirs.dest))

  export const jsFooter = () => src(paths.scriptsFooter)
    .pipe(concat("jsFooter.min.js"))
    .pipe(uglify())
    .pipe(dest(dirs.dest))

  exports.default = series(styles, jsHead, jsFooter);