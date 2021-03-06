<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('questions')->insert([
            'pregunta' => 'Edad',
            'tipo' =>'abierta',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => '¿Por que no has tomado asesorías?',
            'tipo' =>'multiple',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => 'Municipio de residencia actual',
            'tipo' =>'select',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => '¿A quien acudió y cual fue el resultado?',
            'tipo' =>'tabla',
            'section_id'=>1
        ]);

        //más pruebas jiji
        \DB::table('questions')->insert([
            'pregunta' => 'Esta pregunta es abierta por favor escribe lo que sea',
            'tipo' =>'abierta',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => 'esta pregunta es de radio y es de prueba',
            'tipo' =>'multiple',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => 'Pregunta tipo select ojo cuidado',
            'tipo' =>'select',
            'section_id'=>1
        ]);
        \DB::table('questions')->insert([
            'pregunta' => 'esta es otra tablita vamos a ver',
            'tipo' =>'tabla',
            'section_id'=>1
        ]);
    }
}
