<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        return $this->hasMany(Flat::class)->with('features');
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

    public function getFullAddressAttribute(): string
    {
        $project = $this->load('province', 'town', 'district');

        return $project->province->name.' / '.$project->town->name.' / '.$project->district->name;
    }

    public function getPriceAttribute()
    {
        // TODO:check selected price and show it

        return $this->price_in_tl;
    }

    public function getBrochureFullUrlAttribute(): ?string
    {
        return $this->brochure_path ? asset('storage/'.$this->brochure_path) : null;
    }

    public function scopeMinPrice(Builder $builder, $val = 0)
    {
        $allowedPrices = ['tl', 'eur', 'usd'];
        $col = in_array(request('filter.currency'), $allowedPrices) ? request('filter.currency') : 'tl';

        return $builder->where("price_in_{$col}", '>=', $val);
    }

    public function scopeMaxPrice(Builder $builder, $val = 0)
    {
        $allowedPrices = ['tl', 'eur', 'usd'];
        $col = in_array(request('filter.currency'), $allowedPrices) ? request('filter.currency') : 'tl';

        return $builder->where("price_in_{$col}", '<=', $val);
    }

    public function scopeSearch(Builder $builder, $val)
    {
        return $builder->where('title->tr', 'like', '%'.$val.'%');
    }

    public function scopeProvince(Builder $builder, $val)
    {
        return $builder->where('province_id', $val);
    }

    public function scopeTown(Builder $builder, $val)
    {
        return $builder->where('town_id', $val);
    }

    public function getLatLonAttribute()
    {
        $location = $this->location;
        if (! $location) {
            return;
        }
        $location = str_replace(['(', ')'], '', $location);

        return explode(',', $location);
    }
}
