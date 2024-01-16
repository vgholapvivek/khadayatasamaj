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
            // dd($guard);
                if ($guard == "web" && Auth::guard($guard) == 'web') {
                    return redirect('/admin/home');
                }
        
                if ($guard == 'member' && Auth::guard($guard) == 'member') {
                    return redirect('/member/dashboard');
                }
            
               // return $next($request);
        }    
    }
}
