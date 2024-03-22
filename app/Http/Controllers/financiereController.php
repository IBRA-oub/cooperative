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
    public function redAchat(){
        return view('financiere.achat');
    }
    public function message(){
        return view('financiere.message');
    }
    public function addRevenu(){
        return view('financiere.add-revenu');
    }
    public function editRevenu(){
        return view('financiere.edit-revenu');
    }
    public function addAchat(){
        return view('financiere.add-achat');
    }
    public function editAchat(){
        return view('financiere.edit-achat');
    }
}