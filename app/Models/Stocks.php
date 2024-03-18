<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomProduit',
        'quantiterProduit'
    ];

    public function stockiste(){
        return $this->belongsTo(Stockiste::class);
    }
}