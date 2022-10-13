<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (request()->getHost() !== "http://host.docker.internal:8000") {
            abort(403);
        }
        return $next($request);
    }
}
