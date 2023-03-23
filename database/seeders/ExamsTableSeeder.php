<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            ['name' => 'Đề số 1', 'total_marks' => '100', 'duration' => '100', 'passing_marks' => '30'],
            ['name' => 'Đề số 2', 'total_marks' => '74', 'duration' => '12', 'passing_marks' => '40'],
            ['name' => 'Đề số 3', 'total_marks' => '92', 'duration' => '178', 'passing_marks' => '50'],
            ['name' => 'Đề số 4', 'total_marks' => '33', 'duration' => '88', 'passing_marks' => '60'],
            ['name' => 'Đề số 5', 'total_marks' => '44', 'duration' => '89', 'passing_marks' => '10'],
        ];
        DB::table('exams')->insert($exams);
    }
}
