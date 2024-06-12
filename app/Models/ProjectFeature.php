<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProjectFeature extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
