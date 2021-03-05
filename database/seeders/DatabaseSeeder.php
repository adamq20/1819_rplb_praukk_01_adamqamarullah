<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\petugasSeeder;
use Database\Seeders\levelSeeder;

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

            levelSeeder::class
        ]);
        $this->call([
            petugasSeeder::class
        ]);
    }
}
