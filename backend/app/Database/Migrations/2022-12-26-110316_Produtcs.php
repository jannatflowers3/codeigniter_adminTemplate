<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtcs extends Migration
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
                'product_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'null' => false,
                ],
                'product_details' => [
                    'type' => 'VARCHAR',
                    'constraint' => 300,
                    'null' => true,
                ],
                'product_price' => [
                    'type' => 'DECIMAL',
                    'constraint' => 10,2,
                    'null' => false,
                ],
            ]
        );
        $this->forge->addKey('id',true);
        $this->forge->createTable('produtcs');
    }

    public function down()
    {
      $this->forge->dropTable('produtcs');
    }
}
