<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Borrar
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
        if ($request->input('delete') < 2) {
            return redirect('contacto');
        }

        return $next($request);
    }
}
