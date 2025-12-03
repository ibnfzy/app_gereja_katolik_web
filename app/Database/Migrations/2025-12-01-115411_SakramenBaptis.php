<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SakramenBaptis extends Migration
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
            'nama_anak' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_kelamin_anak' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Laki-laki',
                    'Perempuan',
                ],
            ],
            'tempat_tanggal_lahir_anak' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'umur_anak' => [
                'type' => 'TINYINT',
                'constraint' => 3,
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'saksi_saksi' => [
                'type' => 'TEXT'
            ],
            'tanggal_baptis' => [
                'type' => 'DATE',
            ],
            'pelayan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'berkas' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sakramen_baptis');
    }

    public function down()
    {
        $this->forge->dropTable('sakramen_baptis');
    }
}
