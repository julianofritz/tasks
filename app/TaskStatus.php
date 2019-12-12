<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    protected $table = 'task_status';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
