<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'picture',
        'fullName',
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

    public function admin() {
        return $this->hasOne(Admin::class);
    }


    public function financiere() {
        return $this->hasOne(Financiere::class);
    }

    public function planner() {
        return $this->hasOne(Planner::class);
    }

    public function stockiste() {
        return $this->hasOne(Stockiste::class);
    }

    public function publicitaire() {
        return $this->hasOne(Publicitaire::class);
    }

    public function travailleur() {
        return $this->hasMany(Travailleur::class);
    }
}