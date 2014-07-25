<?php

class AuthController extends \BaseController {

    public function getLogin()
    {
        if (Auth::check())
        {
            return Redirect::to('dashboard');
        }

        return View::make('auth.login');
    }

    public function postLogin()
    {
        if (Auth::check())
        {
            return Redirect::to('dashboard');
        }

        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        $remember = (bool) Input::get('remember', false);

        if (Auth::attempt($credentials, $remember))
        {
            return Redirect::intended('dashboard');
        }

        return Redirect::to('login');
    }

    public function getLogout()
    {
        Auth::logout();

        // Maybe there should be a "You're now logged out." view?

        return Redirect::action('HomeController@showWelcome');
    }

}
