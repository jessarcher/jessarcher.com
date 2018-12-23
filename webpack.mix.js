let mix = require('laravel-mix');
let build = require('./tasks/build.js');
var tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
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

mix.js('source/_assets/js/main.js', 'js')
    .sourceMaps()
    .sass('source/_assets/sass/main.scss', 'css')
    .sourceMaps()
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    })
    .purgeCss({
        extensions: ['html', 'md', 'js', 'php', 'vue'],
        folders: ['source'],
        whitelistPatterns: [/language/, /hljs/],
    })
    .version();

mix.copy('./node_modules/font-proxima-nova-scss/fonts/', 'source/assets/build/fonts/vendor/proxima-nova/')
    .copy('./node_modules/@fortawesome/fontawesome-free/webfonts/', 'source/assets/build/fonts/vendor/fontawesome/')
