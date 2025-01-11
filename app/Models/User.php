<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Support\Concerns\HasMediaFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;


use Filament\Panel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements FilamentUser, HasMedia
{
    use HasFactory;
    use HasTranslations;
    use Notifiable;
    use  InteractsWithMedia;


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
            'experience_area' => 'json',
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

    public function setExperienceAreaAttribute($value)
    {
        $this->attributes['experience_area'] = json_encode(explode(',', $value));
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
        return 'https://api.whatsapp.com/send/?phone='.$this->whatsapp;
    }

        public static function boot()
        {
            parent::boot();
            static::saving(function (self $user) {
                $user->slug = str()->slug($user->name);
                if (!$user->password) {
                    $user->password = bcrypt(str()->random());
                }
            });
        }

            public function getShareLinksAttribute()
            {
                return [
                    'sms' => sprintf(config('keys.sms_share_link'), $this->title.' '.route('frontend.user.show', $this)),
                    'email' => sprintf(config('keys.email_share_link'), $this->title.' '.route('frontend.user.show', $this)),
                    'wp' => sprintf(config('keys.wp_share_link'), $this->title.' '.route('frontend.user.show', $this)),
                    'x' => sprintf(config('keys.x_share_link'), route('frontend.user.show', $this)),
                    'fb' => sprintf(config('keys.fb_share_link'), route('frontend.user.show', $this)),
                ];
            }

               public function canAccessPanel(Panel $panel): bool
               {
                   return $this->email === 'admin@mail.com';
               }
}
