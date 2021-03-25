<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sections')->insert([
            'name' => 'Datos Sociodemográficos',
            'quiz_id' => 1
        ]);
    }
}
