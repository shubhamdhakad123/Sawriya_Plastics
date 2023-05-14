<?php

namespace App\Controllers;

class Home extends  BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function forgotPasswordView()
    {
        return view('forgot_pass');
    }
}
