<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeType extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function financiere(){
        return $this->belongsTo(Financiere::class);
    }
    public function charge(){
        return $this->hasMany(Charge::class);
    }
}