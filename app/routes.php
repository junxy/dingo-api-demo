<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('hello');
});

Route::api(['version' => 'v1', 'prefix' => 'api'], function () {
//    Route::get('users', function()
//    {
//        return User::all();
//    });

    Route::resource('posts', 'PostsController');
});