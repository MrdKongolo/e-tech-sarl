<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMotAccueil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'title' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],          
            'subtitle' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],          
            'description' => ['type' => 'TEXT','null'=> false,],     
            'photo' => ['type' => 'VARCHAR','constraint'=>'255','null'=> true,],            
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('accueil');
    }

    public function down()
    {
        $this->forge->droptable('accueil');
    }
}
