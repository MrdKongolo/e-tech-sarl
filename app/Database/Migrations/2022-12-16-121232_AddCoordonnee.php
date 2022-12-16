<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCoordonnee extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'upated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('coordonnees');
    }

    public function down()
    {
        $this->forge->dropTable('coordonnees');        
    }
}
