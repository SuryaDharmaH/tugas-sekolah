<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
  
class UserAccess
{   //mengidentifikasi user yang memiliki akses ke tiap halaman
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->type == $userType){
            return $next($request);
        }
          
        return response()->json(['Kamu Gak Punya Akses Kehalaman ini (wlee😝).']);
        /* return response()->view('errors.check-permission'); */
    }
}