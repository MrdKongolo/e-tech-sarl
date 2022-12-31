<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDocument extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'doc_id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],            
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('doc_id');
        $this->forge->createTable('documents');
    }

    public function down()
    {
        $this->forge->dropTable('documents');
    }
}
