<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Dapatkan instance dari session
        $session = Services::session();

        // Cek apakah pengguna sudah login
        if (!$session->get('user_id')) {
            // Jika belum login, redirect ke halaman login
            return redirect()->to('/auth/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu logika setelah request selesai dalam contoh sederhana ini
    }
}
