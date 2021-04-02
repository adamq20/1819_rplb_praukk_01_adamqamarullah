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
        $user = DB::table('users')->insertGetId([
            'level' => 'admin',
            'email' => 'admin@ticketpedia.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('petugas')->insert([
            'id_user' => $user,
            'nama_petugas' => 'Admin'
        ]);
    }
}