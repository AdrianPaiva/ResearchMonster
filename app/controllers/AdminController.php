<?php

class AdminController extends BaseController
{
    public function showAllUsers()
    {
        $users = User::all();

        return View::make('admin.admin')->with('title', "Admin")->with('users', $users);
    }

    public function showAdmins()
    {
        $users = User::where('role', '=', 'admin')->get();

        return View::make('admin.admin')->with('title', "Admin")->with('users', $users);
    }

    public function showResearchers()
    {
        $users = User::where('role','=','researcher')->get();

        return View::make('admin.admin')->with('title', "Admin")->with('users', $users);
    }

    public function showStandardUsers()
    {
        $users = User::where('role', '=', 'user')->get();

        return View::make('admin.admin')->with('title', "Admin")->with('users', $users);
    }
}