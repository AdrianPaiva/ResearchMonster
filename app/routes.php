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
        $skills = DB::table('skills')
            ->select('id', 'name')
            ->groupBy('name')
            ->get();

        return View::make('projects.skillSearch')->with('title', "Search Projects By Skill")->with('skills',$skills);
    });
    Route::get('projects/skillSearch/{skill}', 'ProjectController@popularSkills');
    Route::post('projects/skillSearch', 'ProjectController@skillSearch');

    Route::get('projects/viewProject/{id}', 'ProjectController@viewProject');

    Route::get('dashboard/notifications', 'NotificationController@showNotifications');
    Route::get('dashboard/notifications/delete/{id}', 'NotificationController@deleteNotification');



});

//student only pages
Route::group(array('before' => 'auth|isStudent'), function () {
    Route::get('dashboard/profile', 'ProfileController@showProfile');
    Route::get('dashboard/editProfile', 'ProfileController@showEditProfile');
    Route::post('dashboard/editProfile', 'ProfileController@doEditProfile');

    //Route::get('projects/apply/{id}', 'ProjectController@applyForProject');
    Route::get('projects/apply/{id}', 'ProjectController@applyForProject');
    Route::get('projects/joinedProjects', 'ProjectController@joinedProjects');
    Route::get('projects/recommendedProjects', 'ProjectController@recommendedProjects');

});


// must have permission to view users
Route::group(array('before' => 'auth|canViewUsers'), function () {

    Route::get('users', 'UserController@showAllStudents');
    Route::get('users/viewProfile/{id}', 'ProfileController@showUserProfile');

    Route::get('users/programSearch', function ()
    {
        $programs = DB::table('user_profiles')
            ->select('program')
            ->groupBy('program')
            ->get();
        return View::make('users.programSearch')->with('title', "Program Search")->with('programs',$programs);
    });
    Route::post('users/programSearch', 'UserController@programSearch');


});

Route::group(array('before' => 'auth|canRecommend'), function () {

    Route::get('projects/recommend/{id}', function ($id) {
        $title = 'Recommend Students';
        $project = Project::findOrFail($id);
        $users = User::where('role', '=', 'student')->get();

        return View::make('projects.recommend')->with("title", $title)->with('project', $project)->with('users',$users);
    });

    Route::post('projects/recommend/{id}', 'RecommendationController@recommend');
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

    Route::get('projects/editProject/{id}', function($id){

        $title = 'Edit Project';
        $project = Project::findOrFail($id);
        return View::make('projects.editProject')->with("title", $title)->with('project',$project);
    });

    Route::post('projects/editProject/{id}', 'ProjectController@editProject');

    Route::get('projects/deleteProject/{id}', 'ProjectController@deleteProject');

    Route::get('projects/acceptUser/{userId}/{projectId}', 'ProjectController@acceptUser');
    Route::get('projects/denyUser/{userId}/{projectId}', 'ProjectController@denyUser');
    Route::get('projects/removeUser/{userId}/{projectId}', 'ProjectController@removeUser');

    Route::get('projects/createdProjects', 'ProjectController@createdProjects');
});


Route::get('forgotPassword', function () {
    return View::make('forgotPassword')->with('title', "Forgot password");
});
Route::post('forgotPassword', 'RemindersController@postRemind');
Route::get('password/reset/{token}', 'RemindersController@getReset');
Route::post('password/reset/{token}', 'RemindersController@postReset');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirmUser'
]);





