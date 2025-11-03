<?php
// app/Models/ExperienceType.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
