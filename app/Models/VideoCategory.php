<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class VideoCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name'];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function scopeSearch(Builder $builder)
    {
        $keyword = request('search');

        if ($keyword) {
            $builder->where(function ($query) use ($keyword) {
                $query->whereRaw('LOWER(JSON_UNQUOTE(name->"$.tr")) like ?', ['%' . strtolower($keyword) . '%'])
                ;
            });
        }

        return $builder;
    }
}
