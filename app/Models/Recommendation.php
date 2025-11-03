<?php
// app/Models/Recommendation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_name',
        'client_description',
        'text',
        'stars',
        'image_path',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
