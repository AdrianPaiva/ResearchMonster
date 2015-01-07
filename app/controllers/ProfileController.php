<?php

class ProfileController extends BaseController
{
    public function showProfile()
    {
        $title = "Profile";

        return View::make("dashboard/profile")->with("title",$title);
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