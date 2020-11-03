// jshint ignore: start
/* eslint-disable */
const mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
   });

mix.js([
    'src/js/01_fontPreloader.js',
    'src/js/02_swiper.min.js',
    'src/js/03_darkmode.js',
    'src/js/04_intersectionObserver.js',
    'src/js/06_mobile-nav.js',
    'src/js/07_modal.js',
    'src/js/08_work-page.js',
    'src/js/09_plugins.js',
    'src/js/10_current-device.min.js',
    'src/js/11_cookieConsent.js'
    ], 'assets/js/main.js');

mix.js([
    'src/js/01_homePageScripts.js',
    ], 'assets/js/homePageScripts.js');
    


mix.sass('src/scss/index.scss', 'assets/css');

mix.browserSync('https://k-cms-master.test/');
