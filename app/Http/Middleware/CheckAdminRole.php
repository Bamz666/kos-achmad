<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna saat ini terautentikasi
        if (auth()->check()) {
            // Periksa apakah peran pengguna adalah "admin"
            if (auth()->user()->role === 'admin') {
                // Jika peran adalah "admin", lanjutkan ke halaman dashboard
                return $next($request);
            }
        }

        // Jika bukan "admin", arahkan ke halaman yang sesuai (misalnya halaman beranda)
        return redirect('/');
    }
}
