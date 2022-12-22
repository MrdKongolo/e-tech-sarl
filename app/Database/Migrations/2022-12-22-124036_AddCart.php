<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCarts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cart_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'hash' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'client' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'prod_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'total' => [
                'type' => 'DOUBLE',
                'constraint' => '6,2',
                'null' => true
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['attente','en cours','traité']
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('cart_id');
        $this->forge->createTable('carts');
    }

    public function down()
    {
        $this->forge->dropTable('carts');        
    }
}
