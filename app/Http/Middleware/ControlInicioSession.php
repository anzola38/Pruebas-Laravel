<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ControlInicioSession
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
        if(is_null($request->session()->get('token'))){
            return redirect('/Session');
        }
        return $next($request);
    }
}
