<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'william',
            'password' => bcrypt('pw123'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'darren',
            'password' => bcrypt('pw123'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'andre',
            'password' => bcrypt('pw123'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'fakhri',
            'password' => bcrypt('pw123'),
            'created_at' => now()
        ]);
    }
}
