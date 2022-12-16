<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTeam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'member_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'profession' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'unique' => true
            ],
            'picture' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('member_id');
        $this->forge->createTable('team');
    }

    public function down()
    {
        $this->forge->dropTable('team');        
    }
}
