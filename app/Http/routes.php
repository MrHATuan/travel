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

Route::get('/',['as' => 'getHome', 'uses' => 'User\PlanController@getHome']);

Route::get('ggmap', function() {
	return view('ggmaps');
});


// Route::get('/',['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::post('register',['as' => 'postRegister', 'uses' => 'LoginController@postRegister']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);


Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
		Route::get('/{name}',['as' => 'getProfile', 'uses' => 'PlanController@getProfile']);
		Route::get('/{name}/edit-profile', ['as' => 'getEditProfile', 'uses' => 'UserController@getEditProfile']);
		Route::post('/{name}/edit-profile', ['as' => 'postEditProfile', 'uses' => 'UserController@postEditProfile']);

		Route::post('/newplan', ['as' => 'postNewPlan', 'uses' => 'PlanController@postNewPlan']);


		Route::get('/{id}/plan', ['as' => 'getPlan', 'uses' => 'PlanController@getPlan']);
	});
});

