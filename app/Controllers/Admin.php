<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // dd(session()->get('email'));
        $data = [
            'title' => 'Login | Titani Indonesia',
            'user' => $this->userModel->getUser('email', session()->get('email'))
        ];
        dd($data['user']);
        return view('admin/dashboard', $data);
    }
}
