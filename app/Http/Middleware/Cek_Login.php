<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        if (in_array($user->level_id, $roles)) {
            return $next($request);
        }

        return redirect('login')->with('error', 'Maaf, Anda tidak memiliki akses.');
    }
}
