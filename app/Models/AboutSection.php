<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'p1',
        'p2',
        'image',
        'about_us_heading',
        'about_us_p1',
        'about_us_p2',
        'about_us_highlight_title',
        'about_us_highlight_text',
        'about_us_image',
    ];
}
