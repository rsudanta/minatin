<?php

namespace App\Http\Middleware;

use App\Models\DetailPsikotest;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsOnePsikotest
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
        if(Auth::user() && DetailPsikotest::where('user_id',Auth::user()->id)->count() <= 1){
            return $next($request);
        }
        DetailPsikotest::where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->take(1)->delete();
        return redirect('psikolog/dashboard');
    }
}
