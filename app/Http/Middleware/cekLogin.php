<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class cekLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('cekuser')) {
            return redirect('/');
        }
        return $next($request);
    }
}
