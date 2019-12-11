<?php

use Illuminate\Database\Seeder;

class TaskTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_types')->insert([
            'name' => 'Dúvidas'
        ]);

        DB::table('task_types')->insert([
            'name' => 'Melhorias'
        ]);

        DB::table('task_types')->insert([
            'name' => 'Problemas'
        ]);
    }
}
