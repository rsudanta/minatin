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
        $active['dashboard']  = '';
        $active['psikotest']     = '';

    
        $route = $request->getPathInfo();
    
        switch(true) {
            case(strstr($route, '/profile')) :
                $active['profile'] = 'active';
                break;
            case(strstr($route, '/order')) :
                $active['order'] = 'active';
                break;
            case(strstr($route, '/psikotest')) :
                $active['psikotest'] = 'active';
                break;
            case(strstr($route, '/dashboard')) :
                $active['dashboard'] = 'active';
                break;
            case(strstr($route, '/edit')) :
                $active['dashboard'] = 'active';
                break;
            default:
                $active['home'] = 'active';
        }
    
        \View::share('active', $active );
    
        return $next($request);   
     }
}
