<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogAdminRequests
{
    public function handle(Request $request, Closure $next)
    {
        try {
            if (str_starts_with($request->path(), 'admin')) {
                Log::info('Admin request', [
                    'method' => $request->method(),
                    'path' => $request->path(),
                    'user_id' => optional($request->user())->id,
                    'input' => $request->except(['_token', '_method']),
                ]);
            }
        } catch (\Throwable $e) {
            // don't break the request on logging errors
            Log::error('Failed to log admin request', ['error' => $e->getMessage()]);
        }

        return $next($request);
    }
}
