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


// route to controller and function at specified URL

Route::get('/', 'HomeController@showWelcome');
Route::get('projects', 'ProjectController@showAllProjects');
Route::get('users', 'UserController@showAllUsers');

Route::get('login', function()
{
    return View::make('login')->with('title',"Login");
});
Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@doLogout');


Route::get('dashboard/notifications', 'NotificationController@showNotifications');
Route::get('dashboard/profile','ProfileController@showProfile');

Route::get('dashboard/editProfile','ProfileController@showEditProfile');
Route::post('dashboard/editProfile','ProfileController@doEditProfile');

Route::get('dashboard/addProject', function()
{
    return View::make('dashboard.addProject')->with('title',"Add Project");
});

/* You can also do this to directly route to pages without a controller

 * Route::get('/', function()
{

	return View::make('hello');
});
 */