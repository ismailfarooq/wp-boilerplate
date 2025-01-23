const mix = require('laravel-mix');
const glob = require('glob');

// Compile global assets
mix.sass('assets/scss/app.scss', 'css/')
   .js('assets/js/app.js', 'js/')
   .setPublicPath('dist'); // set production folder

// Compile SCSS for each block
glob.sync('blocks/**/style.scss').forEach(file => {
    mix.sass(file, file.replace('/style.scss', '/style.css'));
});

glob.sync('blocks/**/editor.scss').forEach(file => {
    mix.sass(file, file.replace('/editor.scss', '/editor.css'));
});

// Copy assets
mix.copyDirectory('assets/images', 'dist/images');
mix.copyDirectory('assets/fonts', 'dist/fonts');

// Enable versioning in production
if (mix.inProduction()) {
    mix.version();
}
