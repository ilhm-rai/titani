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
        $data = [
            'title' => 'Login | Titani Indonesia',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} tidak valid'
                ]
            ],
            'password' => [
                'label' => 'Kata Sandi',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ])) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $user = $this->userModel->getUser('email', $email);
            // cek usernya ada atau tidak
            if ($user) {
                // Cek user aktif 
                if ($user['is_active'] == 1) {
                    // cek kata sandi
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        session()->set($data);
                        // arahkan ke view user atau admin
                        if ($user['role_id'] == 14) {
                            return redirect()->to('/admin');
                        } else {
                            return redirect()->to('/user');
                        }
                    } else {
                        session()->setFlashdata('error', 'Kata sandi salah, lupa kata sandi?');
                        return redirect()->to('/login');
                    }
                } else {
                    session()->setFlashdata('error', 'Email belum terverifikasi');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('error', 'Email tidak terdaftar');
                return redirect()->to('/login');
            }
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to('/login')->withInput()->with('validation', $validation);
        }
    }

    public function register()
    {
        $data = [
            'title' => "Register | Titani Indonesia",
            'validation' => \Config\Services::validation()
        ];
        return view('auth/register', $data);
    }

    public function save()
    {
        // validasi input
        if ($this->validate([
            'name' => [
                'label' => 'Nama lengkap',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} tidak valid',
                    'is_unique[user.email]' => '{field} telah terdaftar'
                ]
            ],
            'password1' => [
                'label' => 'Kata Sandi',
                'rules' => 'required|trim|min_length[4]|matches[password1]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length[5]' => '{field} terlalu pendek',
                    'matches[password2]' => 'Konfirmasi kata sandi salah'
                ]
            ],
            'password2' => [
                'label' => 'Ulangi kata sandi',
                'rules' => 'required|trim|min_length[4]|matches[password1]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length[5]' => '{field} terlalu pendek',
                    'matches[password1]' => 'Konfirmasi kata sandi salah'
                ]
            ]
        ])) {
            $this->userModel->save([
                'name' => htmlspecialchars($this->request->getVar('name')),
                'email' => htmlspecialchars($this->request->getVar('email')),
                'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
                'image' => 'arsal.png',
                'role_id' => 14,
                'is_active' => 1,
            ]);
            session()->setFlashdata('message', 'Selamat anda telah bergabung menjadi bagian dari titani cek email untuk verifikasi');
            return redirect()->to('/login');
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }
    }
}
