<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkSession
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
        if(($request->path()=="login" || $request->path()=="signup" || $request->path()=="login_admin" || $request->path()=="signup_admin" || $request->path()=="adminDashboard") && $request->session()->has('user'))
        {
            return redirect('memberDashboard');
        }
        elseif(($request->path()=="login" || $request->path()=="signup" || $request->path()=="login_admin" || $request->path()=="signup_admin" || $request->path()=="memberDashboard") && $request->session()->has('admin_user'))
        {
            return redirect('adminDashboard');
        }
        return $next($request);
    }
}
