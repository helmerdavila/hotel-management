var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

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
    mix
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor')

        .sass([
            'app.scss'
            ], 'resources/assets/css/app.css')
        .styles([
            'app.css'
        ], 'public/css/main.css')

        .version(['public/css/main.css'])

        .browserSync({
            proxy: 'hotel.app',
            open: false
        });
});
