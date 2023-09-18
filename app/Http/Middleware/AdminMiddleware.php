<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var User $user */
        $user = $request->user();

        if (! $user || ! $user->isAdmin()) {
            abort(ResponseAlias::HTTP_FORBIDDEN, 'Access denied. You must be an admin to access this resource.');
        }

        return $next($request);
    }
}
