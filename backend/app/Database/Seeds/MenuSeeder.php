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
                'name' => 'Pepperoni Pizza',
                'description' => 'A simple yet satisfying classic with rich tomato sauce and a blend of perfectly melted cheeses on a golden, crispy crust.',
                'price' => '355',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Cheese Pizza',
                'description' => 'A classic favorite topped with tomato sauce, melted mozzarella, and generous slices of smoky pepperoni on a perfectly baked crust.',
                'price' => '295',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Hawaiian Pizza',
                'description' => 'A sweet and savory combination of juicy pineapple, smoky ham, and melted mozzarella over a rich tomato base.',
                'price' => '335',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Veggie Supreme Pizza',
                'description' => 'A colorful mix of bell peppers, onions, mushrooms, black olives, and tomatoes atop a mozzarella-covered, sauce-brushed crust.',
                'price' => '375',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => "Meat Lover's Pizza",
                'description' => 'Loaded with pepperoni, ham, sausage, and bacon, layered over mozzarella and savory tomato sauce for a hearty bite.',
                'price' => '375',
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ]

        ];

        $this->db->table('Menu')->insertBatch($menuData);
    }
}
