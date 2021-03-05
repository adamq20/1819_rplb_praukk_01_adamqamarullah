<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class petugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'id_level' => 1,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama_petugas' => 'adam'
        ]);
    }
}