<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function infos()
    {
        return $this->hasMany(PortfolioInfo::class)->where('value->tr', '<>', null)->with('info');
    }

    public function features()
    {
        return $this->hasMany(PortfolioFeature::class)->with('feature')->with('option');
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
    }

    public function scopeProvince(Builder $builder, $val)
    {
        return is_numeric($val) ? $builder->where('province_id', $val) : $builder;
    }

    public function scopeTown(Builder $builder, $val)
    {
        return is_numeric($val) ? $builder->where('town_id', $val) : $builder;
    }

    public function scopeCategory(Builder $builder, $val)
    {
        $values = Category::find($val)?->bloodline?->pluck('id') ?? [$val];

        return $builder->whereIn('category_id', $values);
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

    public function scopeInfo(Builder $builder, ...$val)
    {
        if (collect($val)->flatten()->count() == 2) {
            return $builder;
        }

        return $builder->whereHas('infos', function ($query) use ($val) {
            foreach ($val as $index => $value) {
                if ($index == 0) {
                    $query->whereIn('value->tr', Arr::except($value, 'id'))->where('info_id', $value['id'] ?? null);
                }
                $query->orWhereIn('value->tr', Arr::except($value, 'id'))->where('info_id', $value['id'] ?? null);
            }
        });
    }

    public function scopeSearch(Builder $builder, $val)
    {
        return $builder->where('title->tr', 'like', '%'.$val.'%');
    }

    public function scopeUserId(Builder $builder, $val)
    {
        return $builder->where('user_id', $val);
    }

    public function getBrochureFullUrlAttribute(): ?string
    {
        return $this->brochure_path ? asset('storage/'.$this->brochure_path) : null;
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

    public function getFullAddressAttribute(): string
    {
        $portfolio = $this->load('province', 'town', 'district');

        return $portfolio->province->name.' / '.$portfolio->town->name.' / '.$portfolio->district->name;
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

    public function getMainCategoryAttribute()
    {
        $category = $this->load('category.rootAncestor')->category;

        return $category->rootAncestor?->name ?? $category->name;
    }

    public function getEmbedMapLinkAttribute()
    {
        return sprintf(config('keys.embed_map_link'), config('services.google_maps.key'), trim($this?->lat_lon[0] ?? ''), trim($this?->lat_lon[1] ?? ''));
    }

    public function getMapLinkAttribute()
    {
        return sprintf(config('keys.show_direction_link'), trim($this?->lat_lon[0] ?? ''), trim($this?->lat_lon[1] ?? ''));
    }

    public function getRoomsCountAttribute()
    {
        $roomsCount = $this->load(['infos' => fn ($q) => $q->where('info_id', 2)])->infos?->first()?->value;

        return $roomsCount;
    }

    public function getShareLinksAttribute()
    {
        return [
            'sms' => sprintf(config('keys.sms_share_link'), $this->title.' '.route('frontend.portfolio.show', $this)),
            'email' => sprintf(config('keys.email_share_link'), $this->title.' '.route('frontend.portfolio.show', $this)),
            'wp' => sprintf(config('keys.wp_share_link'), $this->title.' '.route('frontend.portfolio.show', $this)),
            'x' => sprintf(config('keys.x_share_link'), route('frontend.portfolio.show', $this)),
            'fb' => sprintf(config('keys.fb_share_link'), route('frontend.portfolio.show', $this)),
        ];
    }
}
