<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'salaire',
        'heuresTravailler'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function revenu() {
        return $this->hasMany(Revenu::class);
    }

    public function achat() {
        return $this->hasMany(Achat::class);
    }
}