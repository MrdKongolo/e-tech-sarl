<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCommadeField extends Migration
{
    public function up()
    {
        $fields = [
            'attendu' => [
                'type' => 'DOUBLE',
                'constraint' => '6,2',
                'null' => true
            ],
        ];
        $this->forge->addColumn('commandes',$fields);
    }

    public function down()
    {
        //
    }
}
