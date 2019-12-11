<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('channel_id')->unsigned();
            $table->bigInteger('module_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('task_type_id')->unsigned();
            $table->dateTime('date');
            $table->string('user_name', 80);
            $table->mediumText('description');
            $table->mediumText('solution_description')->nullable();
            $table->boolean('removed')->default(false);

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('channel_id')->references('id')->on('channels');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('task_type_id')->references('id')->on('task_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
