var elixir = require('laravel-elixir');

require('laravel-elixir-stylus');
require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.stylus([
  	  'core/app.styl'
  	], './resources/assets/css/app.css')
    	    .sass(['bootstrap/scss/bootstrap.scss', 'font-awesome/font-awesome.scss'], './resources/assets/css/bootstrap.css')
    	    .styles([
    	    	'bootstrap.css',
     	    	'app.css'
    	    	], 'public/css/app.css')
    	    .browserify('app/app.js')
          .version(['public/css/app.css', 'public/js/app.js']);
});
