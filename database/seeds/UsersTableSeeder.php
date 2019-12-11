<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Primeiro Atendente',
            'email'     => 'atendente001@test.com',
            'password'  => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name'      => 'Segundo Atendente',
            'email'     => 'atendente002@test.com',
            'password'  => Hash::make('87654321'),
        ]);

        DB::table('users')->insert([
            'name'      => 'Terceiro Atendente',
            'email'     => 'atendente003@test.com',
            'password'  => Hash::make('54987321'),
        ]);
    }
}
