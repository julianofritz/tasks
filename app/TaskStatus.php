<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    protected $table = 'tasks_status';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
