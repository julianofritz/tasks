<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Dragão roubado',
            'company_id' => 1,
            'channel_id' => 1,
            'module_id' => 1,
            'user_id' => 1,
            'task_type_id' => 1,
            'date' => '2019-12-12 12:14:25',
            'user_name' => 'John Snow',
            'description' => 'O usuário relatou que seu dragão foi roubado e derrubou a muralha com o ladrão'
        ]);

        DB::table('tasks')->insert([
            'title' => 'Problemas com sistema',
            'company_id' => 2,
            'channel_id' => 2,
            'module_id' => 2,
            'user_id' => 2,
            'task_type_id' => 2,
            'date' => '2019-12-13 09:03:44',
            'user_name' => 'Dannerys Targaryen',
            'description' => 'A usuária relatou problemas com o sistema está irritada a ponto de por fogo em seu computador'
        ]);

        DB::table('tasks')->insert([
            'title' => 'Mouse dificil de utilizar',
            'company_id' => 2,
            'channel_id' => 2,
            'module_id' => 2,
            'user_id' => 2,
            'task_type_id' => 2,
            'date' => '2019-12-13 09:03:44',
            'user_name' => 'Jammie Lannister',
            'description' => 'O colaborador reclamou que não existem mouse para canhotos na empresa'
        ]);
    }
}
