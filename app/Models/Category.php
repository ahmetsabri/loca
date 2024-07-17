<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    use HasTranslations;
    use SoftDeletes;

    public $translatable = ['name'];

    protected $guarded = [];

    public function info()
    {
        return $this->hasMany(Info::class)->with('options');
    }
    public function features()
    {
        return $this->hasMany(Feature::class)->with('options');
    }
}
