<?php

use Illuminate\Database\Seeder;

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
            ProjectsTableSeeder::class,
            MenuTableSeeder::class,
            ConfigTypesTableSeeder::class,
            ConfigsTableSeeder::class,
            SliderTableSeeder::class
            ]);
    }
}
