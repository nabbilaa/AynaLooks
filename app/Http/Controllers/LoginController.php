<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout'); // Hanya tamu yang bisa akses login/logout
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan view 'auth.login' ada
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput();
        }

        Auth::login($user);
        \Log::info('User role: ' . $user->role);

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('landing.index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}