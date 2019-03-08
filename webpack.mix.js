const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css')
  .tailwind()
  .purgeCss()
  .browserSync('tailwind-tips.test');

if (mix.inProduction()) {
  mix.version();
}
