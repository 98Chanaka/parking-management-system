<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {   
        $userRole = $request->user()->role;
        
        if ($userRole === 'ssadmin') {
            // ssadmin has full access
            return $next($request);
        } elseif ($userRole === 'sadmin') {
            // sadmin can access user and security roles
            if ($role === 'sadmin' || $role === 'security') {
                return $next($request);
            }
        } elseif ($userRole === 'security') {
            // security can only access user role
            if ($role === 'security') {
                return $next($request);
            }
        }
        return redirect('login');
    }
}
