<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ControlPermiso
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
        if($request->session()->get('permiso') == "A"){
            return $next($request);
        }
        return redirect('/Session/PanelControl/AccesoDenegado');
    }
}
