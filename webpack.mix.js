const mix = require('laravel-mix');
const glob = require('glob-all');
const autoprefixer = require("autoprefixer");
const cssmqpacker = require("css-mqpacker");
const postcssDiscardComments = require("postcss-discard-comments");
const postCssImport = require("postcss-import");
const postInlineSvg = require("postcss-inline-svg");
const tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const postCssOptions = [
    postCssImport(),
    tailwindcss(),
    postInlineSvg(),
    cssmqpacker(),
    autoprefixer(),
    postcssDiscardComments({
        removeAll: true
    })
];

// whitelist these class names
mix.purgeCss({
    paths: () => glob.sync([
        path.join(__dirname, 'views/**/*.blade.php'),
        path.join(__dirname, 'js/**/*.js'),
        path.join(__dirname, 'node_modules/highlight.js/**/*.js'),
    ]),
    whitelistPatterns: [/hljs/]
});

mix.options({
    autoprefixer: false,
    processCssUrls: false,
    postCss: postCssOptions
})
    .setPublicPath('public')
    .postCss("css/main.css", "public")
    .js("js/app.js", "public")
    .copyDirectory('images', "public/images")
    .version()
    .extract()
    .webpackConfig({
        resolve: {
            symlinks: false,
            alias: {
                '@': path.resolve(__dirname, 'js/'),
            },
        }
    });
