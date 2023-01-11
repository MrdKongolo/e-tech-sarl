<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddElementOptions extends Migration
{
    public function up()
    {
        $fields = [            
            'option' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
            ],
            'autre' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
            ],
        ];
        $this->forge->addColumn('elements',$fields);
    }

    public function down()
    {
        //
    }
}
