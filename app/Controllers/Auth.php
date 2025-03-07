<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function __construct() {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    // Halaman login
    public function login() {
        return view('login'); // Menampilkan halaman login
    }

    // Proses login
    public function process_login()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Ambil user dari database berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {    
            // Cek apakah password cocok (TANPA HASH)
            if ($password === $user['password']) {
                session()->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/');
                
            } else {
                return redirect()->to('/Login')->with('error', 'Password salah.');
            }
        } else {
            return redirect()->to('/Login')->with('error', 'Username tidak ditemukan.');
        }
    }

    // Halaman home
    public function home() {
        if (!$this->session->get('user_id')) {
            return redirect()->to('/auth/login'); // Redirect ke halaman login jika belum login
        }
        return view('home'); // Menampilkan halaman home
    }

    // Logout
    public function logout() {
        $this->session->destroy(); // Menghancurkan session
        return redirect()->to('/auth/login'); // Redirect ke halaman login
        }
}
