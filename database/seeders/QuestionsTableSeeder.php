<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'category_id' => 1,
                'question_text' => 'What is the capital of France?',
                'option_1' => 'Berlin',
                'option_2' => 'London',
                'option_3' => 'Paris',
                'option_4' => 'Madrid',
                'answer' => 'Paris',
            ],

            [
                'category_id' => 2,
                'question_text' => 'What is the largest planet in our solar system?',
                'option_1' => 'Jupiter',
                'option_2' => 'Saturn',
                'option_3' => 'Neptune',
                'option_4' => 'Uranus',
                'answer' => 'Jupiter',
            ],

            [
                'category_id' => 1,
                'question_text' => 'What is the currency of Japan?',
                'option_1' => 'Dollar',
                'option_2' => 'Pound',
                'option_3' => 'Yen',
                'option_4' => 'Euro',
                'answer' => 'Yen',
            ],

            [
                'category_id' => 2,
                'question_text' => 'What is the smallest country in the world by land area?',
                'option_1' => 'San Marino',
                'option_2' => 'Monaco',
                'option_3' => 'Nauru',
                'option_4' => 'Vatican City',
                'answer' => 'Vatican City',
            ],

            [
                'category_id' => 1,
                'question_text' => 'What is the world\'s highest mountain?',
                'option_1' => 'K2',
                'option_2' => 'Makalu',
                'option_3' => 'Mount Everest',
                'option_4' => 'Cho Oyu',
                'answer' => 'Mount Everest',
            ]
        ];


        DB::table('questions')->insert($questions);
    }
}
