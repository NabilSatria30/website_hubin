<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekJurusanGuru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $jurusan): Response
    {

    // Jika user bukan guru → larang
    if ($request->user()->role !== 'guru') {
        abort(403, 'Hanya guru yang boleh mengakses.');
    }

    // Jika jurusan guru TIDAK sama dengan yang diminta route → larang
    if ($request->user()->jurusan !== $jurusan) {
        abort(403, 'Anda tidak boleh melihat jurusan ini.');
    }

        return $next($request);
    }
}
