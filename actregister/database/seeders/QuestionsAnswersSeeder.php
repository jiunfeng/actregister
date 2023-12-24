<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionsAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('QuestionsAnswers')->insert([
                'title' =>  "($i).." . Str::random(5),
                'text' => Str::random(50),
                'creator' => Str::random(10) . '@gmail.com',
            ]);
        }
    }
}