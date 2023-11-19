const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css') // Change to Sass for Bootstrap
    .copy('source/_assets/img', 'source/assets/build/img')
    .copy('source/_assets/lib', 'source/assets/build/lib')
    .copy('source/_assets/css/style.css', 'source/assets/build/css')
    .copy('source/_assets/css/bootstrap.css', 'source/assets/build/css')
    .options({
        processCssUrls: false,
    })
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'source/assets/build/js') // Copy Bootstrap JS
    .version();
