<?php

/*
 * API routing
 */

// TODO: Actually make something with the API...
Route::group(array('domain' => 'api.localhost.soud'), function()
{

});

/*
 * Error routes
 */

App::missing(function($exception)
{
	return Response::view('errors.404', array(), 404);
});

/*
 * Global routes
 */

// Front page / Base URL
Route::get('/', array(
	'as'   => 'base',
	'uses' => 'HomeController@index'
));

// Auth
Route::get('login', 'AuthController@getLogin');
Route::post('login', array(
	'as'     => 'login',
	'before' => 'csrf',
	'uses'   => 'AuthController@postLogin'
));
Route::get('logout', array(
	'as'   => 'logout',
	'uses' => 'AuthController@getLogout',
));

// Dashboard
Route::get('dashboard', array(
	'as'     => 'dashboard',
	'before' => 'auth',
	'uses'   => 'DashboardController@index'
));
Route::when('dashboard/*', 'auth');
Route::when('dashboard/*', 'csrf', array('post'));

// Account
Route::get('account/profile', array(
	'as'     => 'account.profile',
	'uses'   => 'Account\ProfileController@index'
));
Route::post('account/profile/update', array(
	'as'     => 'account.profile.update',
	'uses'   => 'Account\ProfileController@update'
));
Route::when('account/*', 'auth');
Route::when('account/*', 'csrf', array('post'));
