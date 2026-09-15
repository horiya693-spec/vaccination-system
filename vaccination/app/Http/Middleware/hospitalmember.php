<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class hospitalmember
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                if(Auth::check()){
            if(Auth::user()->role=="hospitalstaff"){
            return $next($request);
        }
        else{
            return redirect()->route("hospitaldashboard");
        }}
        else{
            return redirect()->route('loginform');
        }
    }
}
