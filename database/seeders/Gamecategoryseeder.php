<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gamecategory;

class GamecategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Action'],
            ['category_name' => 'Sandbox'],
            ['category_name' => 'Fighting'],
            ['category_name' => 'RPG'],
        ];

        foreach ($categories as $category) {
            Gamecategory::create($category);
        }
    }
}
