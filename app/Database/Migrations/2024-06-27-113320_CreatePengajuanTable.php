<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengajuanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'program_studi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'laporan' => [
                'type' => 'TEXT',
            ],
            'berkas_pendukung' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'tanggal_pengajuan' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Pending', 'Disetujui', 'Ditolak'],
                'default'    => 'Pending',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengajuan');
    }

    public function down()
    {
        $this->forge->dropTable('pengajuan');
    }
}