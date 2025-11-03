<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // العلاقات
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function skillCategories()
    {
        return $this->hasMany(SkillCategory::class);
    }

    public function knowledges()
    {
        return $this->hasMany(Knowledge::class);
    }

    public function homeContent()
    {
        return $this->hasOne(HomeContent::class);
    }

    public function counters()
    {
        return $this->hasMany(Counter::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function pricePlans()
    {
        return $this->hasMany(PricePlan::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

    public function portfolioCategories()
    {
        return $this->hasMany(PortfolioCategory::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function experienceTypes()
    {
        return $this->hasMany(ExperienceType::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function contactInfos()
    {
        return $this->hasMany(ContactInfo::class);
    }
}
