<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

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
}
