<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Translatable\HasTranslations;

class Info extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name'];

    public function getUsedValuesAttribute()
    {
        if (! $this->filterable) {
            return null;
        }

        $values = DB::table(
            'portfolio_infos'
        )
            ->selectRaw("DISTINCT(JSON_UNQUOTE(JSON_EXTRACT(`value`, '$.tr'))) as val")
            ->where('info_id', $this->id)
            ->whereNotNull('value->tr')
            ->get();
        return $values->isEmpty() ? null : $values;
    }

    public function portfolioValues()
    {
        return $this->hasMany(PortfolioInfo::class);
    }
}
