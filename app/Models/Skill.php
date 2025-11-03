<?php
// app/Models/Skill.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_category_id',
        'name',
        'progress',
        'type',
        'order',
    ];

    public function skillCategory()
    {
        return $this->belongsTo(SkillCategory::class);
    }

    public function user()
    {
        return $this->hasOneThrough(User::class, SkillCategory::class);
    }
}
