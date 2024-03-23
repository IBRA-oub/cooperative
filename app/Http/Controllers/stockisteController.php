<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stockisteController extends Controller
{
    public function dashboard(){
        return view('stockiste.stockiste-dashboard');
    }
    public function infoStati(){
        return view('stockiste.info-stati');
    }
    public function message(){
        return view('stockiste.message');
    }
    public function editProduitStocke(){
        return view('stockiste.edit-produit-stocke');
    }
}