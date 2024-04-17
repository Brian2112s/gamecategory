<?php

namespace Database\Seeders;

use Database\Seeders\GamecategorySeeder;
use Database\Seeders\GameSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            GamecategorySeeder::class,
            GameSeeder::class,
        ]);
    }
}
