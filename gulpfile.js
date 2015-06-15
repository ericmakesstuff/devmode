var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    jquery: 'vendor/bower_components/jquery/',
    bootstrap: 'vendor/bower_components/bootstrap-sass-official/assets/',
    resources: 'resources/assets/'
}

elixir(function(mix) {
    mix.sass('style.scss', 'public/css/')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + 'dist/jquery.js',
            paths.bootstrap + 'javascripts/bootstrap.js',
            paths.resources + 'js/app.js'
        ], 'public/js/app.js', './')
        .version(["css/app.css", "js/app.js"]);
});
