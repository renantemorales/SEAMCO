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
<<<<<<< HEAD
   .sass('resources/sass/app.scss', 'public/css');
=======
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> 0b562bb6d63287f9ef67f9b806564a7b2602bf8e
