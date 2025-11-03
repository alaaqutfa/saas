<?php
// app/Models/Experience.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experience_type_id',
        'box_type',
        'type',
        'source',
        'title',
        'date_text',
        'description',
        'link_path',
        'has_popup',
        'popup_data',
        'order',
    ];

    protected $casts = [
        'has_popup' => 'boolean',
        'popup_data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experienceType()
    {
        return $this->belongsTo(ExperienceType::class);
    }
}
