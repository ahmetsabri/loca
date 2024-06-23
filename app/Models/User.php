<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    use Notifiable;

    public $translatable = ['bio', 'title'];

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'experience' => 'json',
            'languages' => 'json',
        ];
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function setExperienceAttribute($value)
    {
        $this->attributes['experience'] = json_encode(explode(',', $value));
    }

    public function setLanguagesAttribute($value)
    {
        $this->attributes['languages'] = json_encode(explode(',', $value));
    }

    public function getWpUrlAttribute()
    {
        $phone = $this->phone ? str_replace('+', '', $this->phone) : null;

        return 'https://api.whatsapp.com/send/?phone='.$phone;
    }
}
