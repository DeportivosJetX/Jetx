const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/filtrarProducto.js', 'public/js')
    .js('resources/js/detalleProducto.js', 'public/js')
    .js('resources/js/sliderDetalle.js', 'public/js')
    .sass('resources/sass/app1.scss', 'public/css')
    .sass('resources/sass/rotacion.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/ingresos.scss', 'public/css')
    .copy('node_modules/chart.js/dist/Chart.min.js', 'public/js')
    .sass('resources/sass/errors.scss', 'public/css')
    .sass('resources/sass/productos.scss', 'public/css')
    .sass('resources/sass/detalle.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
        require('autoprefixer'),
    ]);

mix.browserSync('http://jetx.com/');

if (mix.inProduction()) {
    mix.version();
}