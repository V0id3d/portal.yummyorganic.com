<?php

namespace App\TaskCenter;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'title', 'color'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
