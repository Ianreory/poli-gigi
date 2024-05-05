<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $data = [
        //     'title' => "Login"
        // ];
        return view('auth/login');
    }

    public function register()
    {
        // $data = [
        //     'title' => "Register"
        // ];
        return view('auth/register');
    }

    public function user()
    {
        return view('user/index');
    }
}
