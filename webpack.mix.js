const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css') // Change to Sass for Bootstrap
    .options({
        processCssUrls: false,
    })
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'source/assets/build/js') // Copy Bootstrap JS
    .version();
