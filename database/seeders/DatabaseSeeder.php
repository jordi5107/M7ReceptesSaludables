<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RecipeSeeder;
use Database\Seeders\TeamsSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            TeamsSeeder::class,
            UserSeeder::class,
            RecipeSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
