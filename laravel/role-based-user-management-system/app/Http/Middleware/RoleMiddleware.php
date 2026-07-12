<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // agr login nhi hai 
        if (!Auth::check())
            {
                return redirect()->route('/login');
            }
        // agr role match nhi kerta
        if(Auth::user()->role != $role)
            {
                if(Auth::user()->role == 'admin')
                    {
                        return redirect('/admin/dashboard')
                        ->with('error', 'You cannot access that page');
                    }
                return redirect('/dashboard')->with('error', 'ypu cannot access this page');
                
            }
        return $next($request);
    }
}
