<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    protected $with = ['image', 'department'];

    public $translatable = ['description'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
