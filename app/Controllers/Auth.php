<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        helper(['form']);
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Hard-coded username and password
        $validUsername = 'admin';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            // Set session data
            $sessionData = [
                'username' => $username,
                'logged_in' => TRUE,
            ];
            $session->set($sessionData);

            return redirect()->to('/auth/dashboard');
        } else {
            $session->setFlashdata('msg', 'Invalid username or password');
            return redirect()->to('/auth/login');
        }
    }

    public function register()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password') ?? '', PASSWORD_DEFAULT),
        ];

        $userModel->insert($data);

        return redirect()->to('/auth/login');
    }

    public function forgotPassword()
    {
        // Add forgot password logic here
    }

    public function eResponse()
    {
        return view('auth/e_response');
    }

    public function laporFT()
    {
        return view('auth/lapor_ft');
    }

    public function tambahPengajuan()
    {
        return view('auth/tambah_pengajuan');
    }

    public function submitPengajuan()
    {
        $model = new PengajuanModel();

        // Get file upload
        $file = $this->request->getFile('berkas_pendukung');
        $fileName = '';
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);
        }

        // Save data to database
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'laporan' => $this->request->getPost('laporan'),
            'berkas_pendukung' => $fileName,
        ];

        $model->save($data);

        // Redirect to the eResponse page after submission
        return redirect()->to('/auth/eResponse');
    }
    public function dashboard()
    {
        return view('auth/dashboard');
    }

    public function underDevelopment()
    {
        return view('auth/under_development');
    }
    public function logout()
    {
        // Destroy the user session
        session()->destroy();
        // Redirect to the login page
        return redirect()->to('/auth/login');
    }
    
    public function kuisioner()
    {
        return view('auth/under_development');
    }
}