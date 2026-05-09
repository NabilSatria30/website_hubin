<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle(Request $request, Closure $next): Response
{

// Ambil semua parameter middleware setelah $request dan $next
    $args = func_get_args();
    $roles = array_slice($args, 2); // mulai dari argumen ke-3

    //kalau belum login
    if (! $request->user()){
        return redirect('/login');
    }

    //kalau role user tidak ada dalam daftar role yang diizinkan
    //bakalan ke halaaman 403
    if (! in_array($request->user()->role, $roles)){
        abort(403, 'Anda tidak punya akses ke halaman ini');
    }
    
      return $next($request);
}
}