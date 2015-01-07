<?php

class LoginController extends BaseController{


    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
    public function doLogin()
    {
        $rules = array(
            'userId'    => 'required|alphaNum|min:3',
            'userPassword' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('userPassword')); // send back the input (not the password) so that we can repopulate the form
        } else {
            $userdata = array(
                'userId' 	=> Input::get('userId'),
                'password' 	=> Input::get('userPassword')
            );

            if (Auth::attempt($userdata)) {

                return Redirect::to("/");

            } else {
                // validation not successful, send back to form
                return View::make('login')->with("err","Incorrect Login Credentials!")->with("title","login");
            }

        }
    }
}