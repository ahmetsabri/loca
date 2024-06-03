<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'description'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function infos()
    {
        return $this->hasMany(PortfolioInfo::class)->with('info');
    }

    public function features()
    {
        return $this->hasMany(PortfolioFeature::class)->with('feature');
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->with('ancestors');
    }
}
