<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorys extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true
        ],
        'category_name' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => false,
        ],
        'category_description' => [
            'type' => 'VARCHAR',
            'constraint' => 300,
            'null' => false,
        ]
        ]
    );
    $this->forge->addKey('id',true);
    $this->forge->createTable('categories');
}

public function down()
{
  $this->forge->dropTable('categories');
} 
}
