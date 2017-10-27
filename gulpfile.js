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

elixir(function(mix) {
    var node = '../../../node_modules/';

    mix.sass('app.scss')
        .copy('node_modules/font-awesome/fonts/fontawesome-webfont.woff', 'public/fonts/fontawesome-webfont.woff')
        .copy('node_modules/font-awesome/fonts/fontawesome-webfont.woff2', 'public/fonts/fontawesome-webfont.woff2')
        .scripts(
            [
                node + 'jquery/dist/jquery.js',
                node + 'bootstrap-sass/assets/javascripts/bootstrap.js',
                'app.js'
            ],
            'public/js/app.js'
        ).browserSync({
            proxy: 'localhost/asli_proje/public/'
        })
});
