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
Route::get('users/viewProfile/{id}', 'ProfileController@showUserProfile');

Route::get('login', function() // this shows the login form
{
    return View::make('login')->with('title',"Login");
});
Route::post('login', 'UserController@doLogin'); // this processes the login
Route::get('logout', 'UserController@doLogout');

Route::get('register', function() // this shows the register form
{
    return View::make('register')->with('title',"Register");
});

Route::post('register', 'UserController@registerUser');// this processes register

Route::get('dashboard/notifications', 'NotificationController@showNotifications');
Route::get('dashboard/profile','ProfileController@showProfile');

Route::get('dashboard/editProfile','ProfileController@showEditProfile');
Route::post('dashboard/editProfile','ProfileController@doEditProfile');

Route::get('projects/addProject', function()
{
    return View::make('projects.addProject')->with('title',"Add Project");
});

Route::get('projects/skillSearch', function () {
    return View::make('projects.skillSearch')->with('title', "Search Projects By Skill");
});

Route::get('projects/viewProject/{id}', 'ProjectController@viewProject');

Route::get('projects/editProject/{id}', 'ProjectController@showEditProject');
Route::post('projects/editProject/{id}', 'ProjectController@editProject');

Route::get('forgotPassword', function () {
    return View::make('forgotPassword')->with('title', "Forgot password");
});
Route::post('forgotPassword', 'RemindersController@postRemind');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirmUser'
]);



Route::get('admin', 'AdminController@showAllUsers');
Route::get('admin/admins', 'AdminController@showAdmins');
Route::get('admin/researchers', 'AdminController@showResearchers');
Route::get('admin/standardUsers', 'AdminController@showStandardUsers');



/* You can also do this to directly route to pages without a controller

 * Route::get('/', function()
{

	return View::make('hello');
});
 */