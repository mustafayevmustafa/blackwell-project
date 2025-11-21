<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'position',
        'stars',
        'text',
        'image',
    ];

    public function starsHtml(): string
    {
        return str_repeat('★', $this->stars);
    }
}
