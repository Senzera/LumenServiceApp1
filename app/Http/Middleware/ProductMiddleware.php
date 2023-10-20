<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware
{
    public function handle($request, Closure $next)
    {
        // Logika middleware untuk produk
        return $next($request);
    }
}
