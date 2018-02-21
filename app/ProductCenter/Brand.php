<?php

namespace App\ProductCenter;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Brand extends Model implements HasMedia
{
    use HasMediaTrait;

    public static function last()
    {
        return static::all()->last();
    }
}
