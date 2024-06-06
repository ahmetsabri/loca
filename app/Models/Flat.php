<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Flat extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function features()
    {
        return $this->morphMany(GeneralFeature::class, 'featureable');
    }
}
