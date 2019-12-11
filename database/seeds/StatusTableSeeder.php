<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'name' => 'Criado'
        ]);

        DB::table('status')->insert([
            'name' => 'Em Análise'
        ]);

        DB::table('status')->insert([
            'name' => 'Em Desenvolvimento'
        ]);

        DB::table('status')->insert([
            'name' => 'Resolvido'
        ]);
    }
}
