<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratKeluar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'alamat_tujuan' => [
                'type' => 'TEXT',
            ],
            'nomor_surat' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'perihal' => [
                'type' => 'TEXT',
            ],
            'tanggal_keluar' => [
                'type' => 'DATE',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_keluar');
    }

    public function down()
    {
        $this->forge->dropTable('surat_keluar');
    }
}
