<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class LecturaMiddleware {
    public function handle($request, Closure $next){
        if (
            (auth()->check()) && 
            (Auth::user()->rol_id_rol <= 5)
        ){
            return $next($request);
        } else {
            if(auth()->check() == false){ // Si la sesion no se ha iniciado
                abort(401);
            } else {
                abort(403);
            }
        }
    }
}
