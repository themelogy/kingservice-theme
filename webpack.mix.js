let mix = require('laravel-mix')

let dist = 'public/themes/kingservice';

if(!isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix
    .copy(`${__dirname}/node_modules/font-awesome/css`, `${__dirname}/resources/assets/vendor/font-awesome/css`)
    .copy(`${__dirname}/node_modules/font-awesome/fonts`, `${__dirname}/resources/assets/vendor/font-awesome/fonts`)
    .copy(`${__dirname}/resources/assets`, `${__dirname}/assets`)
    .sass(`${__dirname}/resources/assets/sass/styles.scss`, `${dist}/css`)
    .sass(`${__dirname}/resources/assets/sass/bootstrap.scss`, `${dist}/css`)
    .sass(`${__dirname}/resources/assets/sass/bootstrap-grid.scss`, `${dist}/css`);

if(!isProduction) {
    mix.copy(`${__dirname}/resources/assets/img`, `${dist}/assets/img`);
    mix
        .browserSync({
        proxy: 'sahoto.local',
        files: [__dirname + '/**/*.*']
    });
} else {
    mix.version();
}