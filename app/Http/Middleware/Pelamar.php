<?php

namespace App\Http\Middleware;

use Closure;

class Pelamar
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
        if(auth()->user()->role == "pelamar"){
            return $next($request);
        }

        return redirect('home')->with('error',"Hanya user-pelamar yang bisa mengakses!");
    }
}
