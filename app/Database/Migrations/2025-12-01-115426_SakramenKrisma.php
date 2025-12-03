<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SakramenKrisma extends Migration
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
            'nama_jemaat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Laki-laki',
                    'Perempuan',
                ],
            ],
            'tempat_tanggal_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pelayan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_sakramen_krisma' => [
                'type' => 'DATE',
            ],
            'bacaan' => [
                'type' => 'TEXT',
            ],
            'no_surat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto' => [
                'type' => 'TEXT',
            ],
            'berkas' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sakramen_krisma');
    }

    public function down()
    {
        $this->forge->dropTable('sakramen_krisma');
    }
}
