const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .less("resources/less/responsive.less","public/assets/css")
    .less("resources/less/pages.less","public/assets/css")
    .less("resources/less/menu.less","public/assets/css")
    .less("resources/less/components.less","public/assets/css")
    .less("resources/less/core.less","public/assets/css")
    .less("resources/less/menu_dark.less","public/assets/css")
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),])
;
