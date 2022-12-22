<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddElementFields extends Migration
{
    public function up()
    {
        $fields = [
            'price_inf' => [
                'type' => 'DOUBLE',
                'constraint' => '6,2',
                'null' => true
            ],
            'price_max' => [
                'type' => 'DOUBLE',
                'constraint' => '6,2',
                'null' => true
            ],
            'units' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'picture' => [
                'type' => 'TEXT',
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
