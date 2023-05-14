<?php

namespace App\Controllers;

class User extends  BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('users/user_list');
    }
    public function addUser()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('users/add_user_view');
    }

    public function addUserFormData(){
        
    }
}
