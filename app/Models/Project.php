<?php

namespace App\Models;

use App\Enums\CurrencyEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;
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
        return $this->morphMany(Image::class, 'imageable')->orderBy('is_main', 'desc');
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
            $project->images()->each(function ($image) {
                \Storage::disk('public')->delete($image->path);
                $image->delete();
            });
        });

        static::saving(function (self $project) {
            $rate = ExchangeRate::whereIn('currency', [CurrencyEnum::USD->value, CurrencyEnum::EUR->value])->get();
            $project->price_in_usd = $project->price_in_tl / $rate?->where('currency', CurrencyEnum::USD->value)?->first()?->rate ?? 1;
            $project->price_in_eur = $project->price_in_tl / $rate?->where('currency', CurrencyEnum::EUR->value)?->first()?->rate ?? 1;
        });


        static::creating(function (self $project) {
            if (!$project->location) {
                $project->location = '(36.8121,34.6415)';
            }
        });

    }

    public function getFullAddressAttribute(): string
    {
        $project = $this->load('province', 'town', 'district');

        return $project->province->name.' / '.$project->town->name.' / '.$project->district->name;
    }

    public function getPriceAttribute()
    {
        $currency = session('currency', 'tl');
        $col = 'price_in_'.$currency;

        $locale = session('locale', 'tr');
        if ($locale == 'ru') {
            $locale = 'tr';
        }

        return Number::format($this->{$col}, locale: $locale).' '.strtoupper($currency);
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

    public function scopeSearch(Builder $builder)
    {
        $keyword = request('search');

        if ($keyword) {
            $builder->where(function ($query) use ($keyword) {
                $query->whereRaw('LOWER(JSON_UNQUOTE(title->"$.tr")) like ?', ['%' . strtolower($keyword) . '%']);
            });
        }

        return $builder;
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

    public function getEmbedMapLinkAttribute()
    {
        return sprintf(config('keys.embed_map_link'), config('services.google_maps.key'), trim($this?->lat_lon[0] ?? ''), trim($this?->lat_lon[1] ?? ''));
    }

    public function getMapLinkAttribute()
    {
        return sprintf(config('keys.show_direction_link'), trim($this?->lat_lon[0] ?? ''), trim($this?->lat_lon[1] ?? ''));
    }

    public function getShareLinksAttribute()
    {
        return [
            'sms' => sprintf(config('keys.sms_share_link'), $this->title.' '.route('frontend.project.show', $this)),
            'email' => sprintf(config('keys.email_share_link'), $this->title.' '.route('frontend.project.show', $this)),
            'wp' => sprintf(config('keys.wp_share_link'), $this->title.' '.route('frontend.project.show', $this)),
            'x' => sprintf(config('keys.x_share_link'), route('frontend.project.show', $this)),
            'fb' => sprintf(config('keys.fb_share_link'), route('frontend.project.show', $this)),
        ];
    }
}
