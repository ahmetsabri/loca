<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GeneralFeature extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['value'];

    public function featureable()
    {
        return $this->morphTo('featureable');
    }
}
