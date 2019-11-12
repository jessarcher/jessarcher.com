const mix = require('laravel-mix');
const build = require('./tasks/build.js');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.options({
    postCss: [
        require('postcss-import'),
        require('postcss-nested'),
    ]
});

mix.disableSuccessNotifications();
mix.setPublicPath('source');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'config.php',
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
            '!source/**/_tmp/*'
        ]),
    ]
});

mix.js('source/_assets/js/main.js', 'assets/build/js')
   .postCss('source/_assets/css/main.css', 'assets/build/css')
   .tailwind('tailwind.config.js');

if (mix.inProduction()) {
  mix
    .version()
    .purgeCss({
      folders: ['source'],
    });
}
