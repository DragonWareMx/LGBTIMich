<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('options')->insert([
            'opcion' => 18,
            'tipo' =>'num',
            'minimo' =>'14',
            'maximo' =>'90',
            'question_id'=>1
        ]);
        \DB::table('options')->insert([
            'opcion' => 'No hay acompañamiento especializado en el lugar donde vivo',
            'question_id'=>2
        ]);
        \DB::table('options')->insert([
            'opcion' => 'No sabía dónde acudir',
            'question_id'=>2
        ]);
        \DB::table('options')->insert([
            'opcion' => 'No tenía dinero',
            'question_id'=>2
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Carácuaro',
            'question_id'=>3
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Coeneo',
            'question_id'=>3
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Huetamo',
            'question_id'=>3
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Morelia',
            'question_id'=>3
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Uruapan',
            'question_id'=>3
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Organizaciones de la Sociedad Civil',
            'question_id'=>4
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Médica/o general',
            'question_id'=>4
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Psicóloga/o',
            'question_id'=>4
        ]);
        \DB::table('options')->insert([
            'opcion' => 'Endocrinóloga/o',
            'question_id'=>4
        ]);
    }
}
