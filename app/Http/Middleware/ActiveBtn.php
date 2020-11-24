<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveBtn
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
        $active['home']     = '';
        $active['order']  = '';
        $active['profile']     = '';
        $active['daftar']     = '';
        $active['masuk']     = '';
    
        $route = $request->getPathInfo();
    
        switch(true) {
            case(strstr($route, '/login')) :
                $active['masuk'] = 'active';
                break;
            case(strstr($route, '/register')) :
                $active['daftar'] = 'active';
                break;
            case(strstr($route, '/order')) :
                $active['order'] = 'active';
                break;
            case(strstr($route, '/list_order')) :
                $active['order'] = 'active';
                break;
            case(strstr($route, '/edit_profile')) :
                $active['profile'] = 'active';
                break;
            default:
                $active['landing'] = 'active';
        }
    
        \View::share('active', $active );
    
        return $next($request);   
     }
}
