<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    protected $fillable = [
        'task_id', 'user_id', 'start_date', 'end_date','task_status_id', 'target_int', 'target_str'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(TaskStatus::class, 'task_status_id');
    }
}
