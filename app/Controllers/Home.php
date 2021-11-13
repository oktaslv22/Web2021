<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('hello/isi',['data'=>'Hello Wrold jg']);
    }
}
