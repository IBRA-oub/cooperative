<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole 
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach ($roles as $role) {
            switch ($role) {
                case 'admin':
                    if ($user->admin()->exists()) {
                        return $next($request);
                    }
                    break;
                case 'financiere':
                    if ($user->financiere()->exists()) {
                        return $next($request);
                    }
                    break;
                case 'planner':
                    if ($user->planner()->exists()) {
                        return $next($request);
                    }
                    break;
                case 'stockiste':
                    if ($user->stockiste()->exists()) {
                        return $next($request);
                    }
                    break;
                
                default:
                    
                    break;
            }
        }

        
        return redirect()->route('login');
    }
}