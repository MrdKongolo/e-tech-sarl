<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCommandes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cmd_id' => [
                'type' => 'INT',
                'constraint' => 5,
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
            'mean' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'amount' => [
                'type' => 'DOUBLE',
                'constraint' => '6,2',
                'null' => true
            ],
            'proof' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['attente','en cours','traité']
            ],
            'created_at datetime default current_timestamp',
            'upated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('cmd_id');
        $this->forge->createTable('commandes');
    }

    public function down()
    {
        $this->forge->dropTable('commandes');        
    }
}
