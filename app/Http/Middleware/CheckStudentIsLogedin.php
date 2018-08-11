<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class CheckStudentIsLogedin
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
        if (!Auth::guard('student')->check()) {
            return redirect()->route('student_get_login');
        }
        return $next($request);
    }
}
