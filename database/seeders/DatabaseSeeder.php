<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GamecategorySeeder;
use Database\Seeders\GameSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GamecategorySeeder::class,
            GameSeeder::class,
        ]);
    }
}
