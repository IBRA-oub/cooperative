<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit_planter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];
    public function periode(){
        return $this->belongsTo(Periode::class);
    }

    public function materiauxoutil() {
        return $this->hasMany(MateriauxOutil::class);
    }

    
}