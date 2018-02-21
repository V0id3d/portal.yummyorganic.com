<?php

namespace App\ProductCenter;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $fillable = [
        'name', 'description'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
