<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('admin.admin-dashboard');
    }
    public function travailleur(){
        return view('admin.travailleur');
    }
    public function message(){
        return view('admin.message');
    }
    public function addUser(){
        return view('admin.add-user');
    }
}