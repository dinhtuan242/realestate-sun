const mix = require('laravel-mix');

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
mix.copyDirectory('resources/js/ajax.js', 'public/js/ajax.js');
mix.copyDirectory('resources/img/avatar', 'public/upload/avatar');
mix.copyDirectory('resources/img/flag', 'public/upload/flag');
