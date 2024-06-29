<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'program_studi', 'laporan', 'berkas_pendukung', 'tanggal_pengajuan', 'status'];
}
