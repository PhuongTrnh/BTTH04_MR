<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Mathematics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Physics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chemistry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
