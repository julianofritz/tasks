<?php

use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_status')->insert([
            'task_id' => 1,
            'status_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('task_status')->insert([
            'task_id' => 1,
            'status_id' => 2,
            'user_id' => 1,
        ]);
    }
}
