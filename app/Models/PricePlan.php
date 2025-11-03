<?php
// app/Models/PricePlan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'price',
        'price_display',
        'period',
        'is_popular',
        'link_url',
        'note',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function conditions()
    {
        return $this->hasMany(PlanCondition::class);
    }
}
