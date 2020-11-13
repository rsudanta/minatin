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
    
        $route = $request->getPathInfo();
    
        switch(true) {
            case(strstr($route, '/profile')) :
                $active['profile'] = 'active';
                break;
            case(strstr($route, '/order')) :
                $active['order'] = 'active';
                break;
            default:
                $active['home'] = 'active';
        }
    
        \View::share('active', $active );
    
        return $next($request);   
     }
}
