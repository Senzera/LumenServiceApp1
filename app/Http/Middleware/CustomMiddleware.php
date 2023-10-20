<?php

namespace App\Http\Middleware;

use Closure;

class CustomMiddleware
{
    public function handle($request, Closure $next)
    {
        // Logika middleware kustom
        return $next($request);
    }
}
