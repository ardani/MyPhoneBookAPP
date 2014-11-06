<?php

class loginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('layout.login');
	}

    public function  post()
    {
        $email =  Input::get('email');
        $password =  Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::intended('/');
        }else{
            Session::flash('message', "Email Dan Password Tidak Cocok");
            return Redirect::back();
        }
    }

    public function  logout()
    {
        Auth::logout();
        return Redirect::intended('/');
    }



}
