<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiaux extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];

    public function produit_planter(){
        return $this->belongsTo(produit_planter::class);
    }
}