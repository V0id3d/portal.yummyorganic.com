<?php

namespace App\TaskCenter;

use App\CustomerCenter\Company;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'project_due', 'project_started', 'project_complete', 'division_id', 'creator_id', 'user_id', 'status_id', 'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
