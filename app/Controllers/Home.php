<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        print_r(view('welcome_message'));

    }

    public function BaseView(){
        //Aqui van cosas 
    }
}
