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

/*
Route::get('/', function () {
    return view('auth/login');
    //return view('admin/dashboard/index');
});
*/

#ADMIN PANEL
Route::get('/', function () {
    return view('auth/login');
});

// Route to show the login form
Route::get('login', array('as' => 'loginAdmin', 'uses' => 'UserController@showLogin'));

// Route to process the form
Route::post('login', array('as' => 'loginAdmin', 'uses' => 'UserController@doLogin'));
