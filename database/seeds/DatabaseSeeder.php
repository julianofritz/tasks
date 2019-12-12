<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChannelsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TaskTypesTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TaskStatusTableSeeder::class);
    }
}
