<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        return view('toko_sepatu/home');
    }

    public function pria(): string
    {
        return view('toko_sepatu/pria');
    }

    public function Wanita(): string
    {
        return view('toko_sepatu/Wanita');
    }


    public function Login(): string
    {
        return view('toko_sepatu/Login');
    }

    public function create(): string
    {
        return view('toko_sepatu/create');
    }
    public function register()
    {
        return view('toko/register');
    }
}