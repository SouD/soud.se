<?php

/*
 * Model routing
 */

// Project
Route::model('project', 'Project');
// Let's do some dumb binding so we can actually restore trashed projects...
Route::bind('project', function($value, $route)
{
    return Project::withTrashed()->find($value);
});


/*
 * API routing
 */

// TODO: Set to correct domain later!
Route::group(array('domain' => 'api.localhost.soud'), function()
{

    /*
     * Expose Project model
     */

    Route::get('projects', function()
    {
        return Project::paginate(Project::API_PAGINATION_NUM_ITEMS);
    });

    Route::get('project/{project}', function(Project $project)
    {
        return $project;
    });

});


/*
 * Global routes
 */

// Front page
Route::get('/', 'HomeController@showWelcome');

// Auth
Route::get('login', 'AuthController@getLogin');
Route::post('login', array(
    'as' => 'login',
    'before' => 'csrf',
    'uses' => 'AuthController@postLogin'
));
Route::get('logout', 'AuthController@getLogout');

// Dashboard
Route::get('dashboard', array(
    'as' => 'dashboard',
    'before' => 'auth',
    'uses' => 'DashboardController@getDashboard'
));
Route::resource('dashboard/project', 'Dashboard\ProjectController');
Route::post('dashboard/project/{project}/restore', array(
    'uses' => 'Dashboard\ProjectController@restore'
));
Route::when('dashboard/*', 'auth');
Route::when('dashboard/*', 'csrf', array('post'));
