<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratMasuk extends Migration
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
            'alamat_pengiriman' => [
                'type' => 'TEXT',
            ],
            'no_surat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'perihal' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_masuk' => [
                'type' => 'DATE',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_masuk');
    }

    public function down()
    {
        $this->forge->dropTable('surat_masuk');
    }
}
