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
    return view('auth.main');
});

Route::get('admin', function () {
    return view('auth.main');
});

Route::group(array('prefix' => 'admin'), function () {
    Route::post('dashboard', array('as' => 'loginAdmin', 'uses' => 'Auth\AuthController@postSignin'));
    Route::get('dashboard', array('as' => 'logoutAdmin', 'uses' => 'Auth\AuthController@getLogout'));
});

