<?php

namespace Suppliers\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SupplierTestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd('test supplier middleware');
        return $next($request);
    }
}
