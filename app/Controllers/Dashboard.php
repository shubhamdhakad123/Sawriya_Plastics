<?php

namespace App\Controllers;

class Dashboard extends  BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('dashboard/dashboard_view');
    }

    public function getCount(){
        
    }
}
