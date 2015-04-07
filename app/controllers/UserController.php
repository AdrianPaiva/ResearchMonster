<?php

class UserController extends BaseController{

    public function showAllStudents()
    {
        $title = "Users";

        $users = User::where('role', '=', 'student')->get();

        return View::make('users.users')->with("title",$title)->with("users",$users);
    }

    public function registerUser()
    {
        $rules = [
            'userId' => 'required|min:6|unique:users',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ];
        $input = Input::only(
            'userId',
            'email',
            'firstName',
            'lastName',
            'password',
            'password_confirmation'
        );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        if(!ends_with(Input::get('email'),'@georgebrown.ca'))
        {
            Session::flash('emailError', 'A georgebrown.ca email address is required');
            return Redirect::back()->withInput();
        }

        $confirmation_code = str_random(30);

        User::create([
            'userId' => Input::get('userId'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'confirmation_code' => $confirmation_code
        ]);

        UserProfile::create([
            'userId' => Input::get('userId'),
            'firstName' => Input::get('firstName'),
            'lastName' => Input::get('lastName'),
        ]);

        Mail::send('emails.verify', ['confirmation_code' => $confirmation_code], function ($message) {
            $message->to(Input::get('email'), Input::get('userId'))
                ->subject('Verify your email address');
        });



        Session::flash('message', 'Thanks for signing up! Please check your email to verify your account.');

        return Redirect::to('/');
    }

    public function confirmUser($confirmation_code)
    {
        if (!$confirmation_code) {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if (!$user) {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('message', 'Your account has been verified! You may now login and create your profile');

        return Redirect::to('/');

    }
    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function doLogin()
    {
        $rules = array(
            'userId'    => 'required|alphaNum|min:6|exists:users',
            'userPassword' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('userPassword')); // send back the input (not the password) so that we can repopulate the form
        } else {

            $remember = (Input::has('remember')) ? true : false;

            $userdata = array(
                'userId' 	=> Input::get('userId'),
                'password' 	=> Input::get('userPassword'),
                'confirmed' => 1
            );

            if (Auth::attempt($userdata, $remember)) {

                return Redirect::to("/");

            } else {
                // validation not successful, send back to form
                return View::make('login')->with("err","We were unable to sign you in!")->with("title","login");

            }

        }
    }
    public function programSearch()
    {

        $users = User::all()->filter(function ($user)
        {
            $programs = Input::get('programs');
            foreach($programs as $program)
            {
                if($user->profile->program === $program)
                {
                    return true;
                }
            }
        });


        return View::make('users.users')->with("title",'Users')->with('users',$users);
    }


}