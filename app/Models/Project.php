<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'description', 'payment_plan', 'extra_payment'];

    public function features()
    {
        return $this->morphMany(GeneralFeature::class, 'featureable')->where('is_site', false);
    }

    public function siteFeatures()
    {
        return $this->morphMany(GeneralFeature::class, 'featureable')->where('is_site', true);
    }

    public function transportations()
    {
        return $this->hasMany(ProjectTransportation::class);
    }

    public function flats()
    {
        return $this->hasMany(Flat::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
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
        static::deleting(function (self $project) {
            Storage::disk('public')->delete($project->brochure_path);
            $project->images()->each(function ($image) {
                $image->delete();
            });
        });
    }
}
