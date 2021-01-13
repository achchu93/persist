const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
// require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');

mix.setPublicPath('./dist').browserSync('persist.localhost');

mix.postCss('resources/assets/styles/editor.css', 'styles');

mix.postCss('resources/assets/styles/app.css', 'styles', [
  require('tailwindcss'),
]);

mix
  .js('resources/assets/scripts/app.js', 'scripts')
  .js('resources/assets/scripts/customizer.js', 'scripts')
  .blocks('resources/assets/scripts/editor.js', 'scripts')
  .extract();

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix
  // .autoload({ jquery: ['$', 'window.jQuery'] })
  .options({ processCssUrls: false })
  .sourceMaps(false, 'source-map')
  .version();
