<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'u_id' => ['type' => 'INT','constraint' =>11,'unsigned'=> true,'auto_increment' => true,],
            'username' => ['type' => 'VARCHAR','constraint'=>'20','null'=> false,],            
            'email' => ['type' => 'VARCHAR','constraint'=>'100','null'=> false,],                  
            'password' => ['type' => 'VARCHAR','constraint'=>'12','null'=> false,],            
            'created_at datetime default current_timestamp',
       ]);
       $this->forge->addPrimaryKey('u_id');
       $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
