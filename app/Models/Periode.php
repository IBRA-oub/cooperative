<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function planner(){
        return $this->belongsTo(Planner::class);
    }

    public function produit_planter() {
        return $this->hasMany(produit_planter::class);
    }
}