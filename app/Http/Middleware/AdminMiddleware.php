<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if(Auth::user()->role != "admin"){
    //         return redirect()->to('/logout');
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Check the user's role
            if (auth()->user()->role === 'admin') {
                return $next($request);
            }
        }
        // If the user is not authenticated or doesn't have the 'spradm' role, redirect to /logout
        return redirect()->to('/logout');
    }
}
