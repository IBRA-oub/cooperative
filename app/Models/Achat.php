<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomProduit',
        'prixAchatProduit'
    ];
    
    public function financiere(){
        return $this->belongsTo(Financiere::class);
    }
}