<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Constants\RouteConstants;

class IsAdmin
{
    /**
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->role === config('roles.admin')) {
            return redirect(RouteConstants::URL_DASHBOARD_ASPIRASI);
        }
        return $next($request);
    }
}
