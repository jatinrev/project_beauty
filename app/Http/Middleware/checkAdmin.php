<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdmin
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
        /*print_r(Auth::guest());
        print_r(empty(Auth::user()));
        print_r(Auth::user()->user_type);*/
        if( Auth::guest() || (empty(Auth::user()) || Auth::user()->user_type != 'isAdmin') ) {
            return redirect('/');
        }
        return $next($request);
    }
}
