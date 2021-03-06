<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['api', 'web'], 'namespace' => 'Api', 'prefix' => 'api'], function () {
    Route::get('posts/topthree', 'PostController@topThree');
    Route::resource('posts', 'PostController');
    Route::post('posts/{id}/report', 'PostController@report');
    Route::get('login_teste', function () {
        \Auth::loginUsingId(7);
        return redirect('/');
    });

    Route::post('get-title', 'CrawlerController@getTitle');

    Route::post('login', 'AuthController@login');

});

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('home.index');
    });

    Route::get('top-stories', 'PagesController@topStories');

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('auth/facebook', 'Auth\OAuthController@redirectToProvider')->name('facebook.login');
    Route::get('auth/facebook/callback', 'Auth\OAuthController@handleProviderCallback');

});
