<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'company_id',
        'channel_id',
        'module_id',
        'user_id',
        'task_type_id',
        'date',
        'user_name',
        'description',
        'solution_description',
        'removed',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function channel()
    {
        return $this->hasOne(Channel::class, 'id', 'channel_id');
    }

    public function module()
    {
        return $this->hasOne(Module::class, 'id', 'module_id');
    }

    public function status()
    {
        return $this->belongsToMany(Status::class, 'task_status', 'task_id');
    }

    public function actualStatusName()
    {
        return $this->status()->pluck('name')->last();
    }

    public function actualStatusId()
    {
        return $this->status()->pluck('status_id')->last();
    }
}
