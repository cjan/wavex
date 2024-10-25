<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class redirectAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $gaurd = null): Response
    {
        if (Auth::gaurd($gaurd)->check() && Auth::user()->isAdmin == true) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}