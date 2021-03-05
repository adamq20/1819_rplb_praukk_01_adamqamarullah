<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level')->insert([
            'id' => 1,
            'nama_level' => 'admin',
        ]);

        DB::table('level')->insert([
            'id' => 2,
            'nama_level' => 'petugas',
        ]);

        DB::table('level')->insert([
            'id' => 3,
            'nama_level' => 'penumpang',
        ]);
    }
}
