<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Mockery\CountValidator\Exception;



class ForgetPasswordController extends Controller
{
    public function UserEmail(){
        return view('auth/forget-password');
    }
    public function ResetPassword(){
        return view('auth/reset-password');
    }
}