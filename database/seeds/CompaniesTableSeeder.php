<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Empresa parceira 1'
        ]);

        DB::table('companies')->insert([
            'name' => 'Empresa parceira 2'
        ]);

        DB::table('companies')->insert([
            'name' => 'Empresa parceira 3'
        ]);

        DB::table('companies')->insert([
            'name' => 'Empresa parceira 4'
        ]);
    }
}
