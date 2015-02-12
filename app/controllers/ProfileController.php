<?php

class ProfileController extends BaseController
{
    public function showProfile() // This shows the current logged in users profile in the dashboard
    {
        $title = "My Profile";
        if(Auth::check())
        {
            $userId = Auth::id();
            $user = User::find($userId);
            $profile = $user->profile;

            return View::make("dashboard/profile")->with("title",$title)->with('profile',$profile);
        }

    }

    public function showUserProfile($id) // this shows user profiles on the users page
    {
        // toodo get which profile to here
        $title = "Profile Name";

        return View::make('users.viewProfile')->with("title", $title);
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