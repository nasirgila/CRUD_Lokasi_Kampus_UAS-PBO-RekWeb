<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LokasiModel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lokasi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addPrimaryKey('id_lokasi');
        $this->forge->createTable('lokasi');
    }

    public function down()
    {
        $this->forge->dropTable('lokasi');
    }
}
