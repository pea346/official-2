<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $usersData = [
            [
                'firstName' => 'John',
                'middleName' => 'S.',
                'lastName' => 'Doe',
                'email' => 'johndoe@gmail.com',
                'password' => password_hash('jodo123!', PASSWORD_DEFAULT),
                'type' => 'manager',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'firstName' => 'Jane',
                'middleName' => 'B.',
                'lastName' => 'Smith',
                'email' => 'janesmith@gmail.com',
                'password' => password_hash('jasm123!', PASSWORD_DEFAULT),
                'type' => 'client',
                'createdAt' => $now,
                'updatedAt' => $now,
            ]
        ];

        $this->db->table('Users')->insertBatch($usersData);
    }
}
