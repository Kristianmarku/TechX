<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if ($request->user() && ($request->user()->hasRole('Support') || $request->user()->hasRole('Admin')) ) {
            // User is authenticated and is an admin, proceed.
            return $next($request);
        }

        // User is not authorized to access this route, redirect or show an error
        return abort(403, 'Unauthorized');
    }
}
