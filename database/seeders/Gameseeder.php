<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gameseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Call of Duty',
                'gamecategory_id' => 1, // Replace with actual category ID
                'price' => 49.99,
            ],
            [
                'name' => 'Battlefield 2042',
                'gamecategory_id' => 1, // Replace with actual category ID
                'price' => 24.99,
            ],
            [
                'name' => 'Minecraft',
                'gamecategory_id' => 2, // Replace with actual category ID
                'price' => 19.99,
            ],
            [
                'name' => 'GTA 5',
                'gamecategory_id' => 2, // Replace with actual category ID
                'price' => 29.99,
            ],
            [
                'name' => 'Mortal Kombat 3',
                'gamecategory_id' => 3, // Replace with actual category ID
                'price' => 14.99,
            ],
            [
                'name' => 'Stick fight; the game',
                'gamecategory_id' => 3, // Replace with actual category ID
                'price' => 9.99,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
