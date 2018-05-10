let mix = require('laravel-mix');

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

mix.copyDirectory('node_modules/now-ui-dashboard/assets/js', 'public/js')
	.copyDirectory('node_modules/now-ui-dashboard/assets/fonts', 'public/fonts')
   .sass('node_modules/now-ui-dashboard/assets/scss/now-ui-dashboard.scss', 'public/css/dashboard.css');

mix.copyDirectory('node_modules/now-ui-kit/assets/js', 'public/js')
   .copyDirectory('node_modules/now-ui-kit/assets/fonts', 'public/fonts')
   .sass('node_modules/now-ui-kit/assets/scss/now-ui-kit.scss', 'public/css/kit.css');
