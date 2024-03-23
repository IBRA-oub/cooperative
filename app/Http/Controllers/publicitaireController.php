<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicitaireController extends Controller
{
     public function dashboard(){
        return view('publicitaire.publicitaire-dashboard');
    }
    public function infoStati(){
        return view('publicitaire.info-stati');
    }
    public function message(){
        return view('publicitaire.message');
    }
    public function editPubliciter(){
        return view('publicitaire.edit-publiciter');
    }
}