<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name' => 'sirloin',
            'type' => 'beef',
            'created_at' => now()
        ]);
        DB::table('items')->insert([
            'name' => 'mandarin',
            'type' => 'fruit',
            'created_at' => now()
        ]);
        DB::table('items')->insert([
            'name' => 'cabbage',
            'type' => 'vegetable',
            'created_at' => now()
        ]);
    }
}
