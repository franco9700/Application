<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Redirect;
use Closure;

class ValidateRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $user_type)
    {
        if ($request->user()->user_type !== $user_type) {
            return Redirect::route('home');
        }  

        return $next($request);
    }
}
