<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Response;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!empty(FacadesSession::get('user'))){
            return $next($request);
        }else
        {
            // abort(404);
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');

            // return back();
        }

        // if (!Auth::check()) {
        //     // Jika belum login, redirect ke halaman login
        //     return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        // }
        // return $next($request);
    }
}
