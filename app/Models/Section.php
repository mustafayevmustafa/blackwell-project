<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'title',
        'subtitle',
        'content',
        'image',
        'extra_data',
        'is_active',
        'order',
    ];

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'content' => 'array',
        'extra_data' => 'array',
        'is_active' => 'boolean',
    ];

    public static function getByKey($key)
    {
        return self::where('key', $key)->where('is_active', true)->first();
    }
}
