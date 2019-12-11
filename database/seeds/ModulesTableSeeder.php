<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'name' => 'Celebração'
        ]);

        DB::table('modules')->insert([
            'name' => 'Feedback 360'
        ]);

        DB::table('modules')->insert([
            'name' => 'Avaliação de desempenho'
        ]);
    }
}
