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

Route::get('login', function () // this shows the login form
{
    return View::make('login')->with('title', "Login");
});
Route::post('login', 'UserController@doLogin'); // this processes the login
Route::get('logout', 'UserController@doLogout');


Route::get('register', function () // this shows the register form
{
    return View::make('register')->with('title', "Register");
});
Route::post('register', 'UserController@registerUser');// this processes register

// pages you must be logged in to see / pages visible to all user roles
Route::group(array('before' => 'auth'), function () {

    Route::get('projects', 'ProjectController@showAllProjects');
    Route::get('projects/skillSearch', function () {
        return View::make('projects.skillSearch')->with('title', "Search Projects By Skill");
    });
    Route::get('projects/viewProject/{id}', 'ProjectController@viewProject');
    Route::get('projects/editProject/{id}', 'ProjectController@showEditProject');
    Route::post('projects/editProject/{id}', 'ProjectController@editProject');

    Route::get('dashboard/notifications', 'NotificationController@showNotifications');
    Route::get('dashboard/profile', 'ProfileController@showProfile');


});

//student only pages
Route::group(array('before' => 'auth|isStudent'), function () {
    Route::get('dashboard/editProfile', 'ProfileController@showEditProfile');
    Route::post('dashboard/editProfile', 'ProfileController@doEditProfile');
});


// must have permission to view users
Route::group(array('before' => 'auth|canViewUsers'), function () {

    Route::get('users', 'UserController@showAllStudents');
    Route::get('users/viewProfile/{id}', 'ProfileController@showUserProfile');

});

//must be admin
Route::group(array('before' => 'auth|isAdmin'), function () {

    Route::get('admin', 'AdminController@showAllUsers');
    Route::get('admin/admins', 'AdminController@showAdmins');
    Route::get('admin/researchers', 'AdminController@showResearchers');
    Route::get('admin/professors', 'AdminController@showProfessors');
    Route::get('admin/students', 'AdminController@showStudents');
    Route::post('admin/editRole', 'AdminController@editRole'); // processes edit role



});
// researcher/admin only
Route::group(array('before' => 'auth|isResearcher'), function () {

    Route::get('projects/addProject', function () {
        return View::make('projects.addProject')->with('title', "Add Project");
    });

    Route::post('projects/addProject', 'ProjectController@addProject'); // processes add project
});


Route::get('forgotPassword', function () {
    return View::make('forgotPassword')->with('title', "Forgot password");
});
Route::post('forgotPassword', 'RemindersController@postRemind');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirmUser'
]);





