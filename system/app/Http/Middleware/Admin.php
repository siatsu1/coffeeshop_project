<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\SimtelAdmin;

class Admin
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
        if (isset(Auth()->User()->akses)) {
            if (Auth()->User()->akses !== 2) {
                abort(404);
            }
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
