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
            //'libs/jquery.js',
            'libs/bootstrap.js',
            'libs/jquery.flexslider-min.js',
            'libs/jquery.isotope.js',
            'libs/jquery.prettyPhoto.js',
            'libs/filter.js',
            'libs/custom.js',
        ], './public/js/libs.js')
        .styles([
            'libs/sweetalert.css',
            'libs/select2.min.css',
            'libs/jquery.dynatable.css',
            //'libs/bootstrap.css',
            'libs/flexslider.css',
            'libs/prettyPhoto.css',
            'libs/font-awesome.css',
            'libs/font-awesome-ie7.css',
            'libs/style.css',
            'libs/blue.css',
        ], './public/css/libs.css')
});
