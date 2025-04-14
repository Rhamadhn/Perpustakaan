<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;


class AuthController extends Controller
{
    public function showLogin()
    {

        if (Auth::check()) {
            return redirect()->route('dashboard')->with('info', 'Anda sudah login, silakan log out terlebih dahulu sebelum mengakses halaman login!');
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }

            return back()->withErrors([
                'username' => 'Username atau password salah.',
            ]);
        } catch (\Exception $e) {
            Log::error('Login Error: ' . $e->getMessage());

            return back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi nanti.');
        }
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'username'     => $request->username,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if (!$user) {
                return back()->with('error', 'Terjadi masalah saat membuat akun. Silakan coba lagi nanti.');
            }

            return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
        } catch (\Exception $e) {
            Log::error('Register Error: ' . $e->getMessage());

            return back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi nanti.');
        }
    }

    public function logout(Request $request)
    {
        // Menghapus user dari sesi login
        Auth::logout();
        
        // Menghancurkan sesi dan menghapus data sesi yang ada
        $request->session()->invalidate();

        // Meregenerasi token CSRF untuk meningkatkan keamanan
        $request->session()->regenerateToken();

        // Setelah logout, redirect ke halaman utama (atau halaman login jika diinginkan)
        return redirect('/');
    }
}
