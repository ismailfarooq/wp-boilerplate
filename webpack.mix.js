const mix = require('laravel-mix');
const glob = require('glob');
const path = require('path');

// Compile global assets
mix.sass('assets/scss/app.scss', 'css/')
   .js('assets/js/app.js', 'js/')
   .setPublicPath('dist'); // set production folder

// Copy assets
mix.copyDirectory('assets/images', 'dist/images');
mix.copyDirectory('assets/fonts', 'dist/fonts');

// Enable versioning in production
if (mix.inProduction()) {
    mix.version();
}