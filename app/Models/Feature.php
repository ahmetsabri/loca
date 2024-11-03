<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class Feature extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name'];

    public function options()
    {
        return $this->hasMany(FeatureOption::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch(Builder $builder)
    {
        $keyword =request('search');
        return $keyword ? $builder->whereAny(['name'], 'like', "%$keyword%") : $builder;
    }
}
