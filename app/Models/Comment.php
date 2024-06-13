<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $appends = ['formatted_date', 'formatted_name'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function casts(): array
    {
        return [
            'show_name' => 'bool',
        ];
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->toDateString();
    }

    public function getFormattedNameAttribute()
    {
        return $this->show_name ? $this->name : Str::mask($this->name, '*', 1, strlen($this->name) - 2);
    }
}
