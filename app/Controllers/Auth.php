<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data['title'] = "Login | Titani Indonesia";
        return view('Auth/login', $data);
    }
}
