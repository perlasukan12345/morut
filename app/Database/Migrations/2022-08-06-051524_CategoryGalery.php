<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryGalery extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category_galery_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('category_galery_id', true);
        $this->forge->createTable('category_galery');
    }

    public function down()
    {
        $this->forge->dropTable('category_galery');
    }
}
