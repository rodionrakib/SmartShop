<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next, $guard = 'employee')
    {
        if (!auth()->guard($guard)->check()) {
            $request->session()->flash('error', 'You must be an employee to see this page');
            return redirect(route('admin.login'));
        }

        return $next($request);
    }
}
