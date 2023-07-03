<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        // if (Auth::user() && Auth::user()->role != $role){
        //     abort(403, 'Tidak Ada Akses');
        // }

        if(!Auth::check()){
            return redirect('/login');
        }

        $user = Auth::user();

        if(!$user || !in_array($user->role, $role)){
            // return redirect('/login')->withErrors('Unauthorized');
            abort(403, 'gak ada akses. Silahkan Kembali kehalaman sebelumnya');
        }
        return $next($request);
    }
}
