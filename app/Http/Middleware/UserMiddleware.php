<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Componets\HttpFoundation\Response;
use App\Models\Role;
use Auth;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            $role = Role::where('ids', auth()->role_id)->
                first();
                if($role->id == 2){
                    return $next($request);  
                }
            }
            return redirect(url('/'));
    }
}
