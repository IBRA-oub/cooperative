<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mockery\CountValidator\Exception;




class ForgetPasswordController extends Controller
{
    // _______________user email/forget password___________
    public function UserEmail(){
        return view('auth/forget-password');
    }
    public function forgetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        Mail::send("auth.email-link",['token'=>$token],function($message)use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });


        return redirect('forget-password')->with('success','Nous allons envoyer une email pour modifier mots de passe');
    }


    // _____________Resat password_____________
    public function ResetPassword($token){
        return view('auth/reset-password',compact('token'));
    }
    public function ResetPasswordPost(Request $request){

       
        $uu = $request->validate([
            'email' =>'required|email|exists:users',
            'password'=> 'required',
            'confirmed_password'=>'required'
        ]);
        

        $updatePassword = DB::table('password_reset_tokens')
        ->where([
            'email'=>$request->email,
            'token'=>$request->token
        ])->first();
      
        if(!$updatePassword){
            return redirect('reset-password')->with('error','Invalid');
        }

        User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();

        return redirect('login')->with('success','mots de passe mise a jour avec succeé');


       
    }
}