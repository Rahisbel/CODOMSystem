<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {

        if (auth()->check() && auth()->user()->role_id == 1) {
            return $next($request);
        }

        return redirect('/error');

    }
}
