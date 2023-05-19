let mix = require("laravel-mix");
require("laravel-mix-polyfill");
const path = require("path");

let fs = require("fs");
let getFiles = function (dir) {
  // get all 'files' in this directory
  // filter directories
  return fs.readdirSync(dir).filter((file) => {
    return fs.statSync(`${dir}/${file}`).isFile();
  });
};

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath("./")
  .copyDirectory("src/images", "dist/images")
  .copy("src/ajax-loader.gif", "dist/css")

  .autoload({ jquery: ["$", "jQuery"] })

  /*** Critical ***/
  .sass("src/scss/critical.scss", "dist/css")
  .copy("dist/css/critical.css", "dist/critical/critical-css.php")

  /*** General ***/
  // CSS
  .sass("src/scss/editor-styles.scss", "dist/css")
  .sass("src/scss/general.scss", "dist/css")

  // JS
  .js("src/js/editor.js", "./dist/js/")
  .js("src/js/general.js", "./dist/js/")

  /*** Pages ***/
  //CSS

  // JS

  .polyfill({
    enabled: true,
    useBuiltIns: "usage",
    targets: "firefox 50, IE 11",
  })
  .options({
    autoprefixer: {
      options: {
        browsers: ["last 6 versions"],
      },
    },
    processCssUrls: false,
    uglify: {},
  })
  .disableNotifications();

/*** Blocks ***/
getFiles("src/scss/blocks").forEach(function (filepath) {
  if (filepath != "index.scss") {
    mix.sass(
      "src/scss/blocks/" + filepath,
      "blocks/" + filepath.split(".")[0] + "/block.css"
    );
  }
});

getFiles("src/js/blocks").forEach(function (filepath) {
  mix.js(
    "src/js/blocks/" + filepath,
    "blocks/" + filepath.split(".")[0] + "/block.js"
  );
});

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map",
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
  mix.webpackConfig({
    target: ["web", "es5"],
    output: {
      chunkLoading: false,
      wasmLoading: false,
    }
  });
}