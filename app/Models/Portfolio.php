<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function (self $portfolio) {
            Storage::disk('public')->delete($portfolio->brochure_path);
            $portfolio->images()->each(function ($image) {
                $image->delete();
            });
        });
        static::creating(function (self $portfolio) {
            $portfolio->user_id = auth()->id();
        });
    }
}
