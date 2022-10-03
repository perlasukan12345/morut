<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galery extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'galery_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_galery_id' => [
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'option' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'content' => [
                'type'       => 'TEXT',
            ],
        ]);
        $this->forge->addKey('galery_id', true);
        $this->forge->createTable('galery');
    }

    public function down()
    {
        $this->forge->dropTable('galery');
    }
}
