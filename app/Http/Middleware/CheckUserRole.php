<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class CheckUserRole
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
        if (auth()->check()) {
            if (User::hasRoles('mahasiswa')) {
                // Jika pengguna adalah mahasiswa, arahkan ke route mahasiswa
                
                // redirect()->route('mahasiswa.dashboard');
                return $next($request);
            } elseif (User::hasRoles('dosen')) {
                // Jika pengguna adalah dosen, arahkan ke route dosen
                // return redirect()->route('dosen.dashboard');
                return $next($request);
            } elseif (User::hasRoles('admin')) {
                // Jika pengguna adalah dosen, arahkan ke route dosen
                // return redirect()->route('dosen.dashboard');
                return $next($request);
            }
        }

        return $next($request);
    }
}
