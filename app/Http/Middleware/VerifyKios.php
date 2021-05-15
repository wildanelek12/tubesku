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
            if ($request->user()->verified == 'belum') {
                return redirect()->route('user.create'); 
            } else if($request->user()->verified == 'waiting') {
                return redirect('/waiting-page');
            }else{
                return redirect()->route('dashboard_user');
            }
        }

        return $next($request);
    }
}
