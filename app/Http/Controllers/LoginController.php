<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // Tampilkan formulir login
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi data masukan dari formulir login
        $credentials = $request->only('email', 'password');

        // Coba untuk melakukan autentikasi
        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, arahkan ke dashboard atau halaman lainnya
            return redirect('/dashboard');
        }

        // Jika autentikasi gagal, tampilkan pesan kesalahan
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}
