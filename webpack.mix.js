const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//         .options({
//             processCssUrls: false,
//             postCss: [tailwindcss('./tailwind.config.js')],
//         });

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
        .options({
            processCssUrls: false,
            postCss: [tailwindcss('./tailwind.config.js')],
        });

mix.browserSync({
    proxy: 'https://e-voting.test',
    host : 'e-voting.test',
    open : 'external',
    https: {
        key: 'D:/laragon/etc/ssl/laragon.key',
        cert: 'D:/laragon/etc/ssl/laragon.crt',
    }
})
