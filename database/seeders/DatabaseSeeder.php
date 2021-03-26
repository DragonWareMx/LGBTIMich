<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([QuizSeeder::class]);
        $this->call([SectionSeeder::class]);
        $this->call([QuestionSeeder::class]);
        $this->call([AnswerSeeder::class]);
        $this->call([OptionSeeder::class]);
        $this->call([OptionColSeeder::class]);
    }
}
