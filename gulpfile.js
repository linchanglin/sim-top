var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('app.scss')

        .scripts([
            'libs/jquery.min.js',
            'libs/sweetalert-dev.js',
            'libs/select2.min.js',
            'libs/jquery.dynatable.js',
            'libs/clean-blog.js',
        ], './public/js/libs.js')
        .styles([
            'libs/sweetalert.css',
            'libs/select2.min.css',
            'libs/jquery.dynatable.css',
            'libs/clean-blog.css',
        ], './public/css/libs.css')
});
