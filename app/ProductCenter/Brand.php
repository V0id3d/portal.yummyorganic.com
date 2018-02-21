<?php

namespace App\ProductCenter;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Brand extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'slug', 'name', 'description', 'active'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function last()
    {
        return static::all()->last();
    }
}
