<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['name', 'description'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
