<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class register extends BaseController
{
   
    public function insert_register()
    {
        $userModel = new UserModel();
        
        // Validasi input
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|max_length[11]',
        ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            } else {
                

            // // Hash password sebelum disimpan
            // $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            // Simpan data ke database
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                
            ];

            $userModel->save($data);

            return redirect()->to('/Login');

        }
    }
}
