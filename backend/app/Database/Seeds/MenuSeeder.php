<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $menuData = [
            [
                'name' => 'Americano',
                'description' => 'Espresso softened with hot water for a bold and classic taste.',
                'price' => '65',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Latte',
                'description' => 'A balance of espresso, steamed milk, and topped with a layer of milk foam',
                'price' => '80',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ]
        ];

        $this->db->table('Menu')->insertBatch($menuData);
    }
}
