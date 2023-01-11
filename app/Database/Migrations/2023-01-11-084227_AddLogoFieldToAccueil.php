<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLogoFieldToAccueil extends Migration
{
    public function up()
    {
        $field = [
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
        ];
        $this->forge->addColumn('accueil',$field);
    }

    public function down()
    {
        //
    }
}
