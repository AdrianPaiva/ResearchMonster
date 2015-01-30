<?php

class ProfileController extends BaseController
{
    public function showProfile()
    {
        $title = "Profile";
        if(Auth::check())
        {
            $userId = Auth::id();
            $user = User::find($userId);
            $profile = $user->profile;

            return View::make("dashboard/profile")->with("title",$title)->with('profile',$profile);
        }

    }
    public function showEditProfile()
    {
        $title = "Edit Profile";

        return View::make("dashboard/editProfile")->with("title",$title);
    }
    public function doEditProfile()
    {

    }
}