let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/css/app.css',
    'node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
    'node_modules/bootstrap-multiselect/dist/css/bootstrap-multiselect.css',
    'node_modules/datatables.net-dt/css/jquery.dataTables.css',
    'resources/assets/css/vendor/zabuto_calender.css',
    'resources/assets/css/style.css',
], 'public/css/app.css');

mix.version(['public/js/app.js']);
