<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PortfolioInfo extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['value'];

    public function info()
    {
        return $this->belongsTo(Info::class);
    }

    public function option()
    {
        return $this->belongsTo(InfoOption::class, 'value_id')->with('info');
    }

    public function getValueText()
    {
        return is_null($this->value_id) ? $this->value : $this->load('option')->option->name;
    }
}
