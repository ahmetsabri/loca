<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function booted()
    {
        static::created(function ($model) {
            cache()->forget('exchange:rate');
            cache()->rememberForever('exchange:rate', function () use ($model) {
                return $model;
            });
        });
    }
}
