<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountry extends Migration
{
    
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','constraint' => 5,'unsigned' => true,'auto_increment' => true,],
            'code' => ['type' => 'CHAR','constraint' => '2','null' => false],
            'name' => ['type' => 'VARCHAR','constraint' => '80','null' => false],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('countries');
    }

    public function down()
    {
        $this->forge->dropTable("countries");
    }
}
