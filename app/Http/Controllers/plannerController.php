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
}