<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plannerController extends Controller
{
    public function dashboard(){
        return view('planner.planner-dashboard');
    }
    public function infoStati(){
        return view('planner.info-stati');
    }
    public function message(){
        return view('planner.message');
    }

    public function editMateriauxOutils(){
        return view('planner.edit-materiaux-outils');
    }
    public function editProduit(){
        return view('planner.edit-produit-planner');
    }
    public function editPeriode(){
        return view('planner.edit-periode');
    }
}