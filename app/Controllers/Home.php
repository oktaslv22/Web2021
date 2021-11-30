<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('hello/isi');
    }
    public function contactus()
    {
        return view('Views/contactus');
    }
    public function address()
    {
        return view('Views/address');
    }
    public function products()
    {
        return view('Views/products');
    }
}
