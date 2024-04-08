<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeureTrevailler extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function financiere(){
        return $this->belongsTo(Financiere::class);
    }

    public function planner(){
        return $this->belongsTo(Planner::class);
    }

    public function publicitaire(){
        return $this->belongsTo(Publicitaire::class);
    }

    public function stockiste(){
        return $this->belongsTo(Stockiste::class);
    }

    public function travailleur(){
        return $this->belongsTo(Travailleur::class);
    }
}