<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Call of Duty',
                'category_id' => 1,
                'price' => 49.99,
            ],
            [
                'name' => 'Battlefield 2042',
                'category_id' => 1,
                'price' => 24.99,
            ],
            [
                'name' => 'Minecraft',
                'category_id' => 2,
                'price' => 19.99,
            ],
            [
                'name' => 'GTA 5',
                'category_id' => 2,
                'price' => 29.99,
            ],
            [
                'name' => 'Mortal Kombat 3',
                'category_id' => 3,
                'price' => 14.99,
            ],
            [
                'name' => 'Stick fight: the game',
                'category_id' => 3,
                'price' => 9.99,
            ],
            [
                'name' => 'The witcher 3',
                'category_id' => 4,
                'price' => 34.99,
            ],
            [
                'name' => 'Baldurs Gate 3',
                'category_id' => 4,
                'price' => 39.99,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
