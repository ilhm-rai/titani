<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['title'] = "Login | Titani Indonesia";
        return view('Auth/login', $data);
    }
    public function register()
    {
        $data['title'] = "Register | Titani Indonesia";
        // $user = $this->userModel->findAll();
        // dd($user);
        return view('Auth/register', $data);
    }

    public function save()
    {
        $this->userModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password1'),
            'image' => 'arsal.png',
            'role_id' => 14,
            'is_active' => 1,
        ]);

        session()->setFlashdata('message', 'Selamat anda telah bergabung menjadi bagian dari titani cek email untuk verifikasi');
        return redirect()->to('/login');
    }
}
