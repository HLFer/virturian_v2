let mix = require('laravel-mix');

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
//Combine de arquivos js
mix.combine([
  'resources/assets/js/jquery.js',
  'resources/assets/js/materialize.js',
], 'public/js/app.js');

//Combine de arquivo css
mix.combine([
  'resources/assets/css/materialize.css',
  'resources/assets/css/style.css',
], 'public/css/app.css');
   
