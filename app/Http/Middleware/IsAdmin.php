<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
        // check user as admin then go to admin otherwise go to user if auth
        if(Auth::user()){
            if(Auth::user()->is_admin){
                return $next($request);
            }
            return redirect('user');
        }
        
       //else auth ( protect route admin ) Go to home
        return redirect('login');

        return $next($request);
    }
}
