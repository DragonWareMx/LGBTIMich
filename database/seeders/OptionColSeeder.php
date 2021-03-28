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

        //columnas de ps si
        \DB::table('option_cols')->insert([
            'opcion' => 'La neta no',
            'question_id'=>8
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'Poquitillo nomas',
            'question_id'=>8
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'a veces',
            'question_id'=>8
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'si se rifa',
            'question_id'=>8
        ]);
        \DB::table('option_cols')->insert([
            'opcion' => 'anda rifadisimo',
            'question_id'=>8
        ]);
    }
}
