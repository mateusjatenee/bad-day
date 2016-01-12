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

Route::group(['middleware' => 'api', 'namespace' => 'Api'], function () {
    Route::get('post/{id}/islikedbyme', 'PostController@isLikedByMe');
    Route::post('post/like', 'PostController@like');
});

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('home.index');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('auth/facebook', 'Auth\OAuthController@redirectToProvider')->name('facebook.login');
    Route::get('auth/facebook/callback', 'Auth\OAuthController@handleProviderCallback');
});
