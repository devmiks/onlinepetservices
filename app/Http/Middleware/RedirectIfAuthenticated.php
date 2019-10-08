<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ( $request->email != null && $user->user_type > 0 ) {
                return redirect()->route('admin');              
            }else {
                return redirect()->route('home1');  
            }   
        }
        

        return $next($request);
    }
}
