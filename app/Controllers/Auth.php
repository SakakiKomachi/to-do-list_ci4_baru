<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Tampilkan form login
        return view('login');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Login berhasil, simpan informasi user di session
            $session = session();
            $session->set('user_id', $user['id']);
            return redirect()->to('/tasks');
        } else {
            // Login gagal, tampilkan pesan error
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        // Hapus informasi user dari session
        $session = session();
        $session->remove('user_id');
        return redirect()->to('/');
    }
}
