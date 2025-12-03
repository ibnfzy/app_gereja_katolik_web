<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SakramenNikah extends Migration
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
            'nama_pria' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_nikah' => [
                'type' => 'DATE',
            ],
            'tempat_tanggal_lahir_pria' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tempat_tanggal_lahir_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_pelayan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'bacaan' => [
                'type' => 'TEXT',
            ],
            'no_surat_nikah' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'foto_nikah_gabungan' => [
                'type' => 'TEXT',
            ],
            'berkas' => [
                'type' => 'TEXT',
            ],
            'nama_orang_tua_pihak_pria' => [
                'type' => 'TEXT',
            ],
            'nama_orang_tua_pihak_wanita' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sakramen_nikah');
    }

    public function down()
    {
        $this->forge->dropTable('sakramen_nikah');
    }
}
