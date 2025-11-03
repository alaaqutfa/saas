<?php
// app/Models/HomeContent.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'banner_title',
        'banner_static_phrase',
        'banner_slide_phrases',
        'banner_end_phrase',
        'banner_btn_text',
        'banner_btn_link',
        'banner_link_text',
        'banner_link_url',
        'banner_bg_image',
        'banner_image',
    ];

    protected $casts = [
        'banner_slide_phrases' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
