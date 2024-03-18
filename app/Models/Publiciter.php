<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publiciter extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'contenu',
        'datePublicite',
        'picture'
    ];

    public function publicitaire(){
        return $this->belongsTo(Publicitaire::class);
    }
}