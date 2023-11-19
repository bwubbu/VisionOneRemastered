const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/puremedia10.js', 'js')
    .js('source/_assets/js/waypoints.js', 'js')
    .js('source/_assets/js/modernizr.js', 'js')
    .js('source/_assets/js/jquery.flexslider.js', 'js')
    .js('source/_assets/js/jquery.fittext.js', 'js')
    .js('source/_assets/js/jquery-migrate-1.2.1.min.js', 'js')
    .js('source/_assets/js/jquery-1.10.2.min.js', 'js')
    .js('source/_assets/js/backstretch.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css') // Change to Sass for Bootstrap
    .copy('source/_assets/images', 'source/assets/build/images') 
    .copy('source/_assets/inc', 'source/assets/build/inc') 
    .copy('source/_assets/css/puremedia10.css', 'source/assets/build/css')
    .copy('source/_assets/css/media-queries.css', 'source/assets/build/css')
    .copy('source/_assets/css/base.css', 'source/assets/build/css')
    .options({
        processCssUrls: false,
    })
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'source/assets/build/js') // Copy Bootstrap JS
    .version();
