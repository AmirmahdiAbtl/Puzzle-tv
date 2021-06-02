<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Episode;

class status_user
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
        $roles = Auth::user()->roles->pluck('name')->toArray();
        if (in_array('admin',$roles)) {
            return $next($request);
        }
        $ep = Episode::where('slug',$request->episode)->first();
        if (Auth::user()->expire_subscription >= now() or $ep->freeable==0 ){
            return $next($request);
        }
        return redirect()->back()->with('error', 'اشتراک شما به پایان رسیده است');
    }
}
