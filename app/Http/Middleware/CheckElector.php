<?php

namespace App\Http\Middleware;

use Closure;

class CheckElector
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

        if (!$request->session()->get('login_elector')) {
            return redirect('/');
        }

        return $next($request);
    }
}
