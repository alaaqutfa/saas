<?php
// app/Models/Knowledge.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
