<?php

namespace Famdirksen\LaravelUTMUrls\Middleware;

use Closure;

class DisableUTMUrls
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
        $request->headers->add(['x-do-not-append-campagne' => true]);

        return $next($request);
    }
}
