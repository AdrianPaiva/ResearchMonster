<?php

class ProjectController extends BaseController {


	public function showAllProjects()
	{
        $title = "Projects";

        //$products = Product::productsOver1000()->get(); // look at Product model class to see these
        //$products = Product::productsOver(500)->get();


        //$products = Project::all(); // this gets all products from database and makes an array of product objects

        //$products = Product::where("price","<=", "1000")->get();

		return View::make('projects.projects')->with("title",$title);
	}

}
