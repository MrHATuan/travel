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

Route::get('{id}/demo', 'User\PlanController@ggmap');

Route::get('/{id}/plan', ['as' => 'getPlan', 'uses' => 'User\PlanController@getPlan']);

Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::post('register',['as' => 'postRegister', 'uses' => 'LoginController@postRegister']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);


Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
		Route::get('/{name}',['as' => 'getProfile', 'uses' => 'PlanController@getProfile']);

			// set user profile
		Route::get('/{name}/edit-profile', ['as' => 'getEditProfile', 'uses' => 'UserController@getEditProfile']);
		Route::post('/{name}/edit-profile', ['as' => 'postEditProfile', 'uses' => 'UserController@postEditProfile']);

			// new plan
		Route::post('/newplan', ['as' => 'postNewPlan', 'uses' => 'PlanController@postNewPlan']);

			// edit plan
		Route::post('/{id}/editplan', ['as' => 'postEditPlan', 'uses' => 'PlanController@postEditPlan']);
			// delete route
		Route::get('{id}/delroute', ['as' => 'getDelRoute', 'uses' => 'PlanController@getDelRoute']);

		 	// edit plan status
		Route::get('{id}/status', ['as' => 'getStatus', 'uses' => 'PlanController@getStatus']);

			// set user follow
		Route::get('{id}/follow', ['as' => 'getFollow', 'uses' => 'PlanController@getFollow']);
		Route::get('{id}/delfollow', ['as' => 'delFollow', 'uses' => 'PlanController@delFollow']);

			// set user join
		Route::get('{id}/join', ['as' => 'getJoin', 'uses' => 'PlanController@getJoin']);
		Route::get('{id}/deljoin', ['as' => 'delJoin', 'uses' => 'PlanController@delJoin']);
		Route::get('{id}/acceptjoin', ['as' => 'acceptJoin', 'uses' => 'PlanController@acceptJoin']);
		Route::get('{id}/rejectjoin', ['as' => 'rejectJoin', 'uses' => 'PlanController@rejectJoin']);

		Route::post('{id}/newcomment', ['as' => 'postNewComment', 'uses' => 'CommentController@postNewComment']);
		Route::post('{id}/replycomment', ['as' => 'postReplyCm', 'uses' => 'CommentController@postReplyCm']);



	});
});

