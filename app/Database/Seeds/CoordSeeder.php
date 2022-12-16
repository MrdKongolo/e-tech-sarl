<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoordSeeder extends Seeder
{
    public function run()
    {
        $coords = [
            'name'      => 'E-Tech SARL',
            'address'   => '05, Av. Tshisawaka, C/ Kampemba, Lubumbashi, RDC',
            'email'     => 'infos@e-tech-ms.com',
            'phone'     => '+243 852 769 918',
        ];
        $this->db->table('coordonnees')->insert($coords);
    }
}
