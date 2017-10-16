<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(\Auth::user()->can($role . '-acces')){
            return $next($request);
        }

        return response('Anda tidak memiliki Hak Akses.', 401);
        // return $next($request);
    }
}
