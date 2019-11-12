const mix = require('laravel-mix');
const build = require('./tasks/build.js');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build/');
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
mix.options({
    processCssUrls: false,
    postCss: [
        require('postcss-import'),
        require('postcss-nested'),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
   .sourceMaps()
   .postCss('source/_assets/css/main.css', 'css/main.css')
   .sourceMaps()
   .tailwind('tailwind.config.js')
   .purgeCss({
        extensions: ['html', 'md', 'js', 'php', 'vue'],
        folders: ['source'],
        whitelistPatterns: [/language/, /hljs/],
   })
  .copy('./node_modules/font-proxima-nova-scss/fonts/', 'source/assets/build/fonts/vendor/proxima-nova/')
  .version();
