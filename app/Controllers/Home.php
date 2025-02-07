<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('toko_sepatu/home');
    }
}
