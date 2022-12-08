<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use App\Libraries\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'username' => 'Administrator',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'password' => Hash::make('123abc'),
        ];
        $this->db->table('users')->insert($user);
        for ($i = 0; $i < 2; $i++) { //to add 5 causes
            $this->db->table('users')->insert($this->generateUser());
        }
    }
    private function generateUser(): array
    {
        $faker = Factory::create();
        return [
            'username' => $faker->name(),
            'email' => $faker->email(),
            'password' => Hash::make('123abc'),
            'role' => 'user',
            'created_at' => date('Y-m-d : H:s:i')
        ];
    }
}
