<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
