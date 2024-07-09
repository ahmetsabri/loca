<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PortfolioFeature extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['value'];

    protected $guarded = [];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function option()
    {
        return $this->belongsTo(FeatureOption::class, 'feature_option_id');
    }
}
