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
                'price' => 299.00,
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Cheese Classic',
                'description' => 'A classic favorite topped with tomato sauce, melted mozzarella, and generous slices of smoky pepperoni on a perfectly baked crust.',
                'price' => 249.00,
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Hawaiian Pizza',
                'description' => 'A sweet and savory combination of juicy pineapple, smoky ham, and melted mozzarella over a rich tomato base.',
                'price' => 289.00,
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => 'Veggie Supreme',
                'description' => 'A colorful mix of bell peppers, onions, mushrooms, black olives, and tomatoes atop a mozzarella-covered, sauce-brushed crust.',
                'price' => 319.00,
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],
            [
                'name' => "Meat Lovers",
                'description' => 'Loaded with pepperoni, ham, sausage, and bacon, layered over mozzarella and savory tomato sauce for a hearty bite.',
                'price' => 349.00,
                'is_available' => '1',
                'createdAt' => $now,
                'updatedAt' => $now,
            ],

        ];

        $this->db->table('Menu')->insertBatch($menuData);
    }
}
