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
    }
}
