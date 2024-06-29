<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Controller;

class Pengajuan extends Controller
{
    public function tambah()
    {
        return view('tambah_pengajuan');
    }

    public function proses()
    {
        $pengajuanModel = new PengajuanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'laporan' => $this->request->getPost('laporan'),
            'status' => 'Pending'
        ];

        // Handle file upload
        $berkas_pendukung = $this->request->getFile('berkas_pendukung');
        if ($berkas_pendukung->isValid() && !$berkas_pendukung->hasMoved()) {
            $newName = $berkas_pendukung->getRandomName();
            $berkas_pendukung->move(WRITEPATH . 'uploads', $newName);
            $data['berkas_pendukung'] = $newName;
        }

        // Save data to the database
        $pengajuanModel->insert($data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Pengajuan berhasil disimpan!']);
    }
    public function dashboard()
    {
        $pengajuanModel = new PengajuanModel();
        $data['total'] = $pengajuanModel->countAllResults();
        $data['pending'] = $pengajuanModel->where('status', 'Pending')->countAllResults();
        $data['approved'] = $pengajuanModel->where('status', 'Disetujui')->countAllResults();
        $data['rejected'] = $pengajuanModel->where('status', 'Ditolak')->countAllResults();

        return view('auth/dashboard', $data);
    }
}
