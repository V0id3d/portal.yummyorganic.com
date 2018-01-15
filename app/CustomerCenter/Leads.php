<?php

namespace App\CustomerCenter;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $fillable = [
        'name', 'email', 'website', 'address', 'address2', 'city', 'state', 'zip', 'phone', 'tier'
    ];
}
