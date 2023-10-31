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

 mix.css('resources/css/style.css', 'public/assets/css/style.css').version();
 mix.css('resources/css/font.css', 'public/assets/css/style.css').version();
 mix.postCss('resources/css/app.css', 'public/assets/css/app.css').version();

