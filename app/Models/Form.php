<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeSearch(Builder $builder)
    {
        $keyword = request('search');

        if ($keyword) {
            // search by name ,email or phone, no json query needed
            $builder->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                      ->orWhere('email', 'like', "%$keyword%")
                      ->orWhere('phone', 'like', "%$keyword%");
            });
        }

        return $builder;
    }

    
}
