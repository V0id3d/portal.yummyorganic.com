<?php

namespace App\CustomerCenter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'company_id', 'address', 'address2', 'city', 'state', 'zip', 'phone', 'notes'
    ];

    /**
     * @return BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\CustomerCenter\Company');
    }


}
