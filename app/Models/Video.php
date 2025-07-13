<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Video extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title'];

    public function scopeFilter(Builder $builder, $value)
    {
        $values = explode(',', $value ?? '');
        if (!$value) {
            return $builder;
        }
        return $builder->whereIn('video_category_id', $values);
    }

    public function scopeSearch(Builder $builder)
    {
        $keyword = request('search');

        if ($keyword) {
            $builder->where(function ($query) use ($keyword) {
                $query->whereRaw('LOWER(JSON_UNQUOTE(title->"$.tr")) like ?', ['%' . strtolower($keyword) . '%'])
                ;
            });
        }

        return $builder;
    }
}
