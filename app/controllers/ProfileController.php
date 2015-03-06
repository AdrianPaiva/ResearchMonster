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
            $email = $user->email;
            $skills = unserialize($profile->skills);
            return View::make("dashboard/profile")->with("title",$title)->with('profile',$profile)->with('email',$email)->with('skills',$skills);
        }

    }

    public function showUserProfile($id) // this shows user profiles on the users page
    {

        $title = "Profile Name";

        $user = User::findOrFail($id);
        $profile = $user->profile;
        $skills = unserialize($profile->skills);
        $email = $user->email;
        if($user->role != "student")
        {
            return Redirect::to('/');
        }
        return View::make('users.viewProfile')->with("title", $title)->with('profile',$profile)->with('skills', $skills)->with('email',$email);
    }

    public function showEditProfile()
    {
        $title = "Edit Profile";
        $userId = Auth::id();
        $user = User::find($userId);
        $profile = $user->profile;

        $skills = unserialize($profile->skills);

        return View::make("dashboard/editProfile")->with("title",$title)->with('profile',$profile)->with('skills',$skills);
    }
    public function doEditProfile()
    {
        $title = "Profile";
        $userId = Auth::id();
        $user = User::find($userId);


        $rules = [
           // 'image' => 'image|mimes:jpg,jpeg,png,bmp,gif'

        ];
        $input = Input::all();

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $user->profile->program = Input::get('program');
        $user->profile->experience = Input::get('experience');
        $user->profile->summary = Input::get('summary');

        $skillArray = explode(',',Input::get('hidden-tags'));
        $user->profile->skills = serialize($skillArray);

        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $destinationPath = public_path() . '/img/';
            $filename = $file->getClientOriginalName();
            Input::file('image')->move($destinationPath, $filename);

            $user->profile->picture = '/img/'.$filename ;
        }

        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $destinationPath = public_path() . '/uploads/';
            $filename = $file->getClientOriginalName();
            Input::file('file')->move($destinationPath, $filename);

            $user->profile->attachment1 = '/uploads/' . $filename;
            $user->profile->attachment2 = $filename;
        }

        $user->save();
        $user->profile->save();

        Session::flash('message', 'Profile Edited Successfully!');
        return Redirect::to("dashboard/profile");
    }
}