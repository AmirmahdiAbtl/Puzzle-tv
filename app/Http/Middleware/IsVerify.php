<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVerify
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
        if(!auth()->user()->mobile_verified){
            return redirect()->route('verification.notice',['id' => auth()->user()->id]);
        }
        return $next($request);
    }
}
