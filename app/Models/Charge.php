<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function chargeType(){
        return $this->belongsTo(ChargeType::class);
    }
}