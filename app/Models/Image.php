<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['full_url'];

    public function imageable()
    {
        return $this->morphTo('imageable');
    }

    public function getFullUrlAttribute(): string
    {
        return asset("storage/{$this->path}");
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function (self $image) {
            Storage::disk('public')->delete($image->path);
        });
    }
}
