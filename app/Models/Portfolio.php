<?php
// app/Models/Portfolio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'portfolio_category_id',
        'title',
        'description',
        'image_path',
        'template_url',
        'has_background',
        'background_color',
        'order',
    ];

    protected $casts = [
        'has_background' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
