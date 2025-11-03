<?php
// app/Models/Profile.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar',
        'post',
        'cv_path',
        'age',
        'residence',
        'city',
        'whatsapp_url',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'menu_items',
        'default_language',
        'brand_logos',
        'copyright_text',
        'preloader_name',
        'preloader_job_title',
    ];

    protected $casts = [
        'menu_items' => 'array',
        'brand_logos' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
