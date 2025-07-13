<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'body'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public static function booted()
    {
        static::saving(function (self $post) {
            $post->slug = Str::slug($post->title);
        });
    }

    public function getShareLinksAttribute()
    {
        return [
            'sms' => sprintf(config('keys.sms_share_link'), $this->title.' '.route('frontend.post.show', $this)),
            'email' => sprintf(config('keys.email_share_link'), $this->title.' '.route('frontend.post.show', $this)),
            'wp' => sprintf(config('keys.wp_share_link'), $this->title.' '.route('frontend.post.show', $this)),
            'x' => sprintf(config('keys.x_share_link'), route('frontend.post.show', $this)),
            'fb' => sprintf(config('keys.fb_share_link'), route('frontend.post.show', $this)),
            'li' => sprintf(config('keys.li_share_link'), 'http://google.com'),
        ];
    }

    public function scopeSearch(Builder $builder)
    {
        $keyword = request('search');

        if ($keyword) {
            $builder->where(function ($query) use ($keyword) {
                $query->whereRaw('LOWER(JSON_UNQUOTE(title->"$.tr")) like ?', ['%' . strtolower($keyword) . '%'])
                ;
            });
        }

        return $builder;
    }
}
