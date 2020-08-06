let mix = require('laravel-mix');

mix
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper'],
  })
  .options({
    processCssUrls: false,
  })
  .js('src/js/app.js', 'dist/js')
  .sass('src/sass/app.sass', 'dist/css')
  .browserSync({
    proxy: 'http://localhost/cc-abogados/',
    open: false,
    files: ['dist/css/app.css', 'dist/js/app.js', './**/*.+(html|php)'],
  })
  .sourceMaps(true, 'source-map');
