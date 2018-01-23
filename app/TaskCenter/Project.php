<?php

namespace App\TaskCenter;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'title', 'description', 'owner_id', 'project_due', 'project_started', 'project_complete', 'division_id', 'creator_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
