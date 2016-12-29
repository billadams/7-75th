const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir((mix) => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

elixir(function (mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    mix.sass('app.scss')
        .webpack('app.js')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
        .scripts([
            'libs/jquery.nivo.slider.js',
            // 'libs/shoutScript.js'
        ], './public/js/libs.js')
        .styles([
            'libs/nivo-slider.css',
            //'libs/themes/bar/bar.css'
        ], './public/css/libs.css');
});
