<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah user sudah login
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        // 2. Cek apakah user memiliki role admin
        // Pilih salah satu cara pengecekan berikut:

        // Cara 1: Jika menggunakan kolom is_admin (boolean)
        if (!auth()->user()->is_admin) {
            return redirect('/')->with('error', 'Akses terbatas untuk administrator');
        }

        // Atau Cara 2: Jika menggunakan sistem role (spatie/laravel-permission)
        // if (!auth()->user()->hasRole('admin')) {
        //     return abort(403, 'Unauthorized action');
        // }

        // Atau Cara 3: Jika menggunakan enum role
        // if (auth()->user()->role !== \App\Enums\UserRole::ADMIN) {
        //     return back()->with('error', 'Akses ditolak');
        // }

        return $next($request);
    }
}