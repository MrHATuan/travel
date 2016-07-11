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

Route::get('/',['as' => 'getHome', function () {
    return view('home');
}]);

Route::get('profile', function() {
	return view('profile');
});

Route::get('test',['as' => 'abc', function() {
	return view('tutorial');
}]);

Route::get('com', function() {
	return view('com');
});

Route::get('table', function() {
	return view('table');
});

// Route::get('login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::post('register',['as' => 'postRegister', 'uses' => 'LoginController@postRegister']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);
