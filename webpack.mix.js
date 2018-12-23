let mix = require('laravel-mix');
let build = require('./tasks/build.js');
var tailwindcss = require('tailwindcss');

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

if (mix.inProduction()) {
    let glob = require("glob-all");
    let PurgecssPlugin = require("purgecss-webpack-plugin");

    class TailwindExtractor {
        static extract(content) {
            return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
        }
    }

    mix.webpackConfig({
        plugins: [
            new PurgecssPlugin({

                // Specify the locations of any files you want to scan for class names.
                paths: glob.sync([
                    path.join(__dirname, "source/**/*.php"),
                ]),
                extractors: [
                    {
                        extractor: TailwindExtractor,

                        // Specify the file extensions to include when scanning for
                        // class names.
                        extensions: ["html", "js", "php", "vue"]
                    }
                ]
            })
        ]
    });
}

mix.js('source/_assets/js/main.js', 'js')
    .sourceMaps()
    .sass('source/_assets/sass/main.scss', 'css')
    .sourceMaps()
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    })
    .version();

mix.copy('./node_modules/font-proxima-nova-scss/fonts/', 'source/assets/build/fonts/vendor/proxima-nova/')
    .copy('./node_modules/@fortawesome/fontawesome-free/webfonts/', 'source/assets/build/fonts/vendor/fontawesome/')
