<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddElement extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'el_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'cat_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,],
            'el_title' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],          
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('el_id');
        $this->forge->createTable('elements');
    }

    public function down()
    {
        $this->forge->droptable('elements');
    }
}
