<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyKios
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
        if (isset($request->user()->verified)) {
            if ($request->user()->verified == 1) {
                return redirect()->route('home');
            } else {
                return redirect()->route('wellcome');
            }
        }

        return $next($request);
    }
}
