<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
        $title = "GBC Research Monster";

        //$projects = DB::table('projects')->orderBy('created_at', 'desc')->take(6)->get();
        $projects = Project::orderBy('created_at','desc')->take(6)->get();

		return View::make('home')->with("title",$title)->with('projects',$projects);
	}

}
