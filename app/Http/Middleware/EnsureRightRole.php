<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureRightRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,): Response
    {
        if(Auth::check() && Auth::user()->role == 'administrator') {
            return $next($request);
        }
        return redirect('dashboard_calon_mahasiswa')->with(['session','[You dont have to this place, so fucking go to your place bitch 👿']);
    }
}
