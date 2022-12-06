<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cat_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'srv_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,],
            'cat_title' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],            
            'cat_slug' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],            
            'cat_description' => ['type' => 'TEXT','null'=> true,],            
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('cat_id');
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->droptable('categories');
    }
}
