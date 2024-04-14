<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financiereController extends Controller
{
    public function dashboard(){
        return view('financiere.financiere-dashboard');
    }
    public function redRevenu(){
        return view('financiere.revenu');
    }
    // _________________________________

    
    public function redMateriaux(){
        return view('financiere.materiaux');
    }
    public function redCharge(){
        return view('financiere.charge');
    }
    public function redMateriel(){
        return view('financiere.materiel');
    }
    public function redElectriciterEau(){
        return view('financiere.electriciter-eau');
    }
    public function redLocation(){
        return view('financiere.location');
    }

    // ___________________________________
    
    public function message(){
        return view('financiere.message');
    }

    // _____________________________________
    
    public function addRevenu(){
        return view('financiere.add-revenu');
    }
    public function addMateriaux(){
        return view('financiere.add-materiaux');
    }
    public function addMateriel(){
        return view('financiere.add-materiel');
    }
    public function addLocation(){
        return view('financiere.add-location');
    }
    public function addElectriciterEeau(){
        return view('financiere.add-electriciter-eau');
    }
    // _____________________________
    public function editRevenu(){
        return view('financiere.edit-revenu');
    }
    public function editMateriaux(){
        return view('financiere.edit-materiaux');
    }
    public function editMateriel(){
        return view('financiere.edit-materiel');
    }
    public function editLocation(){
        return view('financiere.edit-location');
    }
    public function editElectriciterEau(){
        return view('financiere.edit-electriciter-eau');
    }
}