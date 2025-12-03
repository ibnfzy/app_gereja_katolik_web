<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KeuanganMingguan extends Migration
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
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nominal' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'jenis_keuangan' => [
                'type' => 'ENUM',
                'constraint' => [
                    'Pemasukan',
                    'Pengeluaran',
                ],
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'kategori_keuangan' => [
                'type' => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('keuangan_mingguan');
    }

    public function down()
    {
        $this->forge->dropTable('keuangan_mingguan');
    }
}
