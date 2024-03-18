<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockiste extends Model
{
    use HasFactory;
    protected $fillable = [
        'salaire',
        'heuresTravailler'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stocks() {
        return $this->hasMany(Stocks::class);
    }
}