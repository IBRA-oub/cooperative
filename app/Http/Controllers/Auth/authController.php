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



class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginAction(Request $request) {
        
      $validite = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $validite['password'] = Hash::make($request->password);
        

        
        
        if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
    
        $request->session()->regenerate();

        $user = Auth::user();

        // Vérifier le rôle de l'utilisateur et rediriger en conséquence
        if($user->admin) {
            return redirect()->route('admin-dashboard');
        } elseif($user->financiere) {
            return redirect()->route('financiere-dashboard');
        }elseif($user->planner) {
            return redirect()->route('planner-dashboard');
        }elseif($user->stockiste){
            return redirect()->route('stockiste-dashboard');
        }elseif($user->publicitaire){
            return redirect()->route('publicitaire-dashboard');
        }
   
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
     }
}