// jshint ignore: start
/* eslint-disable */
const mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
   });

mix.js([
    'src/js/swiper.min.js',
    'src/js/darkmode.js',
    'src/js/intersectionObserver.js',
    'src/js/canvasCursor.js',
    'src/js/mobile-nav.js',
    'src/js/modal.js',
    'src/js/work-page.js',
    'src/js/plugins.js',
    'src/js/current-device.min.js',
    ], 'assets/js/main.js');


mix.sass('src/scss/index.scss', 'assets/css');

mix.browserSync('https://k-master-test.test/');
