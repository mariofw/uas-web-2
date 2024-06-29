<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Maulana',
            'nim' => '2010817310008',
            'program_studi' => 'Teknologi Informasi',
            'laporan' => 'Contoh laporan',
            'berkas_pendukung' => '',
            'status' => 'Pending',
        ];

        // Using Query Builder
        $this->db->table('pengajuan')->insert($data);
    }
}