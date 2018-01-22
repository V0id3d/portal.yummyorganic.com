<?php

namespace App\TaskCenter;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
