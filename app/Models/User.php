<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function introduction():HasMany
    {
        return $this->hasMany(Introduction::class);
    }

    public function academic():HasMany
    {
        return $this->hasMany(Academic::class);
    }

    public function experience():HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function objective():HasMany
    {
        return $this->hasMany(Objective::class);
    }

    public function project():HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function skill():HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
