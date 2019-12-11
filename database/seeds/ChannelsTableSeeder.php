<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            'name' => 'Email'
        ]);

        DB::table('channels')->insert([
            'name' => 'Whatsapp'
        ]);

        DB::table('channels')->insert([
            'name' => 'Site'
        ]);

        DB::table('channels')->insert([
            'name' => 'Outros'
        ]);
    }
}
