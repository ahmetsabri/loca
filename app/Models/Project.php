<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'description'];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function transportaions()
    {
        return $this->hasMany(ProjectTransportation::class);
    }
}
