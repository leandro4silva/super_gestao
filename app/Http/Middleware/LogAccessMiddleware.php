<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Models\LogAccess;

class LogAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $browser = $request->server->get('HTTP_USER_AGENT');
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->server->get('REQUEST_URI');

        LogAccess::create([
            'log' => "IP $ip requisitou a rota $route pelo navegador $browser"
        ]);

        $response = $next($request);

        $response->setStatusCode(201, 'O status da resposta e o mensagem da resposta foram modificados');

        return $response;
    }
}
