<?php
// app/Models/PlanCondition.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCondition extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_plan_id',
        'description',
        'is_available',
        'order',
    ];

    public function pricePlan()
    {
        return $this->belongsTo(PricePlan::class);
    }
}
