<?php

namespace App\Http\Middleware;

use App\Constant\RoleConstant;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::check())
            {
                if(Auth::user()->role_id === RoleConstant::ADMIN_ID)
                    {
                        return $next($request);
                    }
            }
    }
}
