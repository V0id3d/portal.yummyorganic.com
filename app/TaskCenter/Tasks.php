<?php

namespace App\TaskCenter;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function project()
    {
        return $this->belongsTo('App\TaskCenter\Company');
    }

    public function assignedTo()
    {
        return $this->belongsTo('App\User');
    }
}
