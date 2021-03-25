<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('quizzes')->insert([
            'name' => 'LGBTI Michoacán'
        ]);
    }
}
