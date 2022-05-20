<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use illuminate str sluggable
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // make laravel eloquent observer
    public static function boot()
    {
        parent::boot();

        static::saving(function ($post)
        {
            $post->slug = Str::slug($post->title);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
