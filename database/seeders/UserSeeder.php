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
            'email' => 'william@test.com',
            'password' => bcrypt('pw123'),
            'role' => 'admin',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'darren',
            'email' => 'darren@test.com',
            'password' => bcrypt('test123'),
            'role' => 'admin',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'andre',
            'email' => 'andre@test.com',
            'password' => bcrypt('pw123'),
            'role' => 'subscribed',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'fakhri',
            'email' => 'fakhri@test.com',
            'password' => bcrypt('pw123'),
            'role' => 'unsubscribed',
            'created_at' => now()
        ]);
    }
}
