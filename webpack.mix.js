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
    .copy('node_modules/jquery/dist/jquery.min.js', 'source/assets/build/js') // Copy Bootstrap JS
    .copy('node_modules/datatables.net-bs5/js/dataTables.bootstrap5.min.js', 'source/assets/build/js') // Copy DataTables JS
    .copy('node_modules/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js', 'source/assets/build/js') // Copy DataTables Responsive JS
    .copy('node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css', 'source/assets/build/css') // Copy DataTables CSS
    .copy('node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css', 'source/assets/build/css') // Copy DataTables Responsive CSS
    .copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'source/assets/build/js') // Copy DataTables JS
    .copy('node_modules/@popperjs/core/dist/umd/popper.min.js', 'source/assets/build/js') // Copy Popper.js
    .version();
