<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view("form.login");
    }
    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
        ]);

        $credentials = $request->only('email', 'password');

        // Debugging (opsional, dapat dihapus pada production)
        logger('Attempting login with credentials', $credentials);

        // Proses otentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            if (Auth::user()->role === "administrator") {
                return redirect()->route('dashboard-admin')->with('success', 'Login berhasil!');
            } elseif (Auth::user()->role === "calon-mahasiswa") {
                return redirect()->route('dashboard-calon')->with('success', 'Login berhasil!');
            }

            // Jika role tidak dikenali
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'role' => 'Role pengguna tidak dikenali.',
            ]);
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
