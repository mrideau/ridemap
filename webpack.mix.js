const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/map.js", "public/js");

mix.js("resources/js/components/map.js", "public/js/components");

mix.js("resources/js/admin/skatepark_edit.js", "public/js/admin");
mix.js("resources/js/skatepark_show.js", "public/js");

mix.sass("resources/scss/app.scss", "public/css");
