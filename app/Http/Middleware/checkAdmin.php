<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkAdmin
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
        $user=Auth::user();
    
        if($user->usertype == 'admin'){ 
            
            return $next($request);

        }
        else{
            return redirect()->route('home');
        }
        
    }
}
