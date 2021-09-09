<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->is_admin== '4'){
            return $next($request);
        }else
        {
            return redirect('login');
            //return redirect('userindex');
        }
    }
}
