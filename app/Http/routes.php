<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', function () {
    return view('auth.login');
});

Route::group(array('prefix' => 'dashboard'), function () {
    Route::post('index', array('as' => 'loginAdmin', 'uses' => 'Auth\AuthController@postSignin'));
    Route::get('index', array('as' => 'logoutAdmin', 'uses' => 'Auth\AuthController@getLogout'));
});

