<?php

class UserController extends BaseController{

    public function showAllUsers()
    {
        $title = "Users";

        return View::make('users.users')->with("title",$title);
    }
}