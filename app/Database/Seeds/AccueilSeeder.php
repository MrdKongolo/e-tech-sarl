<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccueilSeeder extends Seeder
{
    public function run()
    {
        $coords = [
            'title'      => "Mot d'accueil",
            'subtitle'   => 'Bienvenue sur E-Tech SARL',
            'description'=> "E-Tech Sarl est une société de droit congolais composée des professionnels très ambitieux soucieux d’exceller et d’innover.
                            Nous garantissons la réussite et surtout la satisfaction de nos partenaires. <br>
                            Nos techniciens ont fait preuves dans toutes sortes de projets (marchés) quelles que soient leurs tailles, tant locaux qu’internationaux.
                            Ce qui fait de nous un panel de talentueux.",
            'photo'     => '',
            'created_at' => date('Y-m-d : H:s:i')
        ];
        $this->db->table('accueil')->insert($coords);
    }
}
