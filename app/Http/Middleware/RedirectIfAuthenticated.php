<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) 
        {
            if ($guard == "web" && Auth::guard($guard)->check()) 
            { 
                return redirect('/admin/home');
            }

            if ($guard == "member" && Auth::guard($guard)->check()) 
            {
                return $next($request);
            }
            
            if (Auth::guard($guard)->check()) 
            {
                return $next($request);
            }
            
            return $next($request);

            // if (Auth::guard($guard)->check()) 
            // {
            //     return redirect(RouteServiceProvider::HOME);
            // }
        }
    }
}
