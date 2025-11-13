<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];


    protected static function booted()
    {
        static::saving(function ($product) {
            if (isset($product->title['en'])) {
                $product->slug = Str::slug($product->title['en']);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
