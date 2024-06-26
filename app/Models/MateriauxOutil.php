<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriauxOutil extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produit_planter(){
        return $this->belongsTo(produit_planter::class);
    }
}