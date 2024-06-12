<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function getAttachmentUrlAttribute()
    {
        return $this->attachment ? asset("storage/{$this->attachment}") : null;
    }
}
