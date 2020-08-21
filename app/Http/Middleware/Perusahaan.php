<?php

namespace App\Http\Middleware;

use Closure;

class Perusahaan
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
        if(auth()->user()->role == "perusahaan"){
            return $next($request);
        }

        return redirect('home')->with('error',"Hanya user-perusahaan yang bisa mengakses!");
    }
}
