<?php

class UserController extends BaseController{

    public function showAllUsers()
    {
        $title = "Users";

        return View::make('users.users')->with("title",$title);
    }
    public function showUserProfile($id)
    {
        // toodo get which profile to here
        $title = "Profile Name";

        return View::make('users.viewProfile')->with("title",$title);
    }
}