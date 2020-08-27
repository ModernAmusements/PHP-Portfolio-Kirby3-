// jshint ignore: start
/* eslint-disable */
const mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
   });

mix.combine([
    'src/js/libs.js',
    'src/js/main.js',
    'src/js/scripts.js',
    'src/js/home/html2canvas.js',
    'src/js/home/scripts.js',
    ], 'assets/js/main.js');
    
// mix.sass('src/scss/index.scss', 'assets/css');

mix.browserSync('http://k-master-test.ma/');
