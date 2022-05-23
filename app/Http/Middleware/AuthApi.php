<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthApi
{

    public function handle(Request $request, Closure $next)
    {
        $key = $request->header('Authorization') ?? $request->header('authorization');

        if(!$key || $key !== "himtiasik")
        {
            return response()->json('unauthorized');
        }
        return $next($request);
    }
}
