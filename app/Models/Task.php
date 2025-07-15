<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title'];

    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class);
    }
}
