<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FeatureOption extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded = [];
    public $translatable = ['name'];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
