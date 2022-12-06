<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddService extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'srv_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'srv_title' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],            
            'srv_slug' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],            
            'srv_description' => ['type' => 'TEXT','null'=> true,],            
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('srv_id');
        $this->forge->createTable('services');
    }

    public function down()
    {
        $this->forge->droptable('services');
    }
}
