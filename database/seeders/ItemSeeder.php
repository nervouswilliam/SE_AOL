<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name' => 'item1',
            'created_at' => now()
        ]);
        DB::table('items')->insert([
            'name' => 'item2',
            'created_at' => now()
        ]);
        DB::table('items')->insert([
            'name' => 'item3',
            'created_at' => now()
        ]);
    }
}
