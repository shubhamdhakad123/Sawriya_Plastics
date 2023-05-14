<?php

namespace App\Controllers;

class Product extends  BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('users/user_list');
    }
    public function addProduct()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('product/add_product_view');
    }
    public function productList()
    {
        echo view('header');
        echo view('navbar');
        echo view('sidebar');
        return view('product/product_list.php');
    }
}
