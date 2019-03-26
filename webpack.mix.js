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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .js('node_modules/pg-calendar/dist/js/pignose.calendar.min.js', 'public/js')
   .copy('node_modules/pg-calendar/dist/css/pignose.calendar.min.css', 'public/css')
   .copy('node_modules/pg-calendar/dist/css/pignose.calendar.css', 'public/css');