<?php

class UsersController extends \BaseController {

public function login()
{
    return View::make('users.login');
}

public function auth()
{
    $email=Input::get('email');
    $password=Input::get('password');

    if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    return Redirect::intended('/posts');
    } else {
        return Redirect::action('UsersController@login');
    }
}

public function logout()
{
    Auth::logout();
    return Redirect::action('PostsController@index');
}

public function showSignup()
{
    return View::make('users.signup');
}

public function createUser()
{
    $user=new User();
    $user->username=Input::get('username');
    $user->email=Input::get('email');
    $user->password=Input::get('password');

    if ($user->save()) {
        Session::flash('successMessage', 'New user created!');
        Log::info('A new user has been created!');
    } else {
        Session::flash('errorMessage', 'User did not save!');
        return Redirect::back()->withInput();
    }
    $email=Input::get('email');
    $password=Input::get('password');
    Auth::attempt(array('email'=>$email, 'password'=>$password));
    return Redirect::action('PostsController@index');
    
}

} //end PostsController