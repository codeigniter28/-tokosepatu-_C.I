<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('toko_sepatu/home');
    }

    public function pria_page(): string
    {
        return view('toko_sepatu/pria');
    }

}
