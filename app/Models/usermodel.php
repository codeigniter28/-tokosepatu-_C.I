<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'Login'; // Nama tabel
    protected $primaryKey = 'id_user'; // Primary key
    protected $allowedFields = ['username', 'password']; // Field yang diizinkan untuk diisi

}