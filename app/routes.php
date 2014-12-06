<?php

/*
 * API routing
 */

// TODO: Actually make something with the API...
Route::group(array('domain' => 'api.localhost.soud'), function()
{

});

/*
 * Global routes
 */

// Front page / Base URL
Route::get('/', array(
	'as'   => 'base',
	'uses' => 'HomeController@showWelcome'
));

// Auth
Route::get('login', 'AuthController@getLogin');
Route::post('login', array(
	'as'     => 'login',
	'before' => 'csrf',
	'uses'   => 'AuthController@postLogin'
));
Route::get('logout', 'AuthController@getLogout');

// Dashboard
Route::get('dashboard', array(
	'as'     => 'dashboard',
	'before' => 'auth',
	'uses'   => 'DashboardController@getDashboard'
));
Route::when('dashboard/*', 'auth');
Route::when('dashboard/*', 'csrf', array('post'));
