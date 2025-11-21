<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanaProduct extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'datasheet',
        'order',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'is_active' => 'boolean',
    ];
}
