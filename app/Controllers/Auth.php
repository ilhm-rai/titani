<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data['title'] = "Login | Titani Indonesia";
        return view('Auth/login', $data);
    }
    public function register()
    {
        $data['title'] = "Register | Titani Indonesia";
        return view('Auth/register', $data);
    }
}
