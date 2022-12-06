<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPartner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'part_id' => ['type' => 'INT','constraint' => 5,'unsigned' => true,'auto_increment' => true,],
            'part_name' => ['type' => 'VARCHAR','constraint' => '50','null' => false],
            'part_logo' => ['type' => 'VARCHAR','constraint' => '255','null' => true],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('part_id');
        $this->forge->createTable('partners');
    }

    public function down()
    {
        $this->forge->dropTable('partners');
    }
}
