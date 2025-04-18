<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Vérifie si l'utilisateur est authentifié et possède le rôle spécifié
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            abort(403, 'Accès interdit.');
        }

        return $next($request);
    }
}
