<?php

namespace App\Http\Middleware;

use App\Partner;
use Closure;
use Illuminate\Support\Facades\Auth;

class authUser
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
        if (@Auth::user()->status == 0) {
            return $next($request);
        }
        return redirect('/profile');
    }
}
