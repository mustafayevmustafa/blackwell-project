<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];


    protected static function booted()
    {
        static::saving(function ($blog) {
            if (isset($blog->title['en'])) {
                $slug = Str::slug($blog->title['en']);

                // Ensure unique slug
                $count = 0;
                $originalSlug = $slug;

                while (static::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                    $count++;
                    $slug = $originalSlug . '-' . $count;
                }

                $blog->slug = $slug;
            }
        });
    }
}
