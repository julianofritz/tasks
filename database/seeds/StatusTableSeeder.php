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
            'name' => 'Aberto'
        ]);

        DB::table('status')->insert([
            'name' => 'Em Análise'
        ]);

        DB::table('status')->insert([
            'name' => 'Em Andamento'
        ]);

        DB::table('status')->insert([
            'name' => 'Concluído'
        ]);
    }
}
