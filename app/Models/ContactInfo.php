<?php
// app/Models/ContactInfo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'section_id',
        'label',
        'value',
        'type',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
