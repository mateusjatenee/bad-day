var elixir = require('laravel-elixir');

require('laravel-elixir-stylus');

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
    	    .sass('../../../node_modules/bootstrap/scss/bootstrap.scss', './resources/assets/css/bootstrap.css')
    	    .styles([
    	    	'bootstrap.css',
     	    	'app.css'
    	    	], 'public/css/app.css')
          .version('public/css/app.css');
});
