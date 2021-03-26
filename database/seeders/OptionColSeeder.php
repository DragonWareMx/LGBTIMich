<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionColSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('option_cols')->insert([
            'opcion' => 'Fue informativo y útil',
            'question_id'=>4
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'No podía ofrecerme todo lo que necesitaba',
            'question_id'=>4
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'Quería ayudar, pero yo no di mi consentimiento 
            para el tratamiento propuesto',
            'question_id'=>4
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'Se negó a ayudarme',
            'question_id'=>4
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'Trató de convencerme de que no soy trans',
            'question_id'=>4
        ]);
    }
}
