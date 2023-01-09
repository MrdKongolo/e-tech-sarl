<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'srv_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,],
            'title' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],          
            'description' => ['type' => 'VARCHAR','constraint'=>'255','null'=> false,],
            'picture' => ['type' => 'VARCHAR','constraint'=>'255','null'=> true,],          
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('srv_id','services','srv_id', '', 'CASCADE');
        $this->forge->createTable('blogs');
    }

    public function down()
    {
        $this->forge->droptable('blogs');
    }
}
