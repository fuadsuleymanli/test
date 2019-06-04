<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if(Auth::check()){
          if (Auth::user()->user_type == 2){
              return $next($request);
          }else{
              return redirect()->route('front.user.login');
          }
      }else{
          return redirect()->route('front.user.login');
      }
    }
}
