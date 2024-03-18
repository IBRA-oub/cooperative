<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicitaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'salaire',
        'heuresTravailler'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function publiciter() {
        return $this->hasMany(Publiciter::class);
    }
}