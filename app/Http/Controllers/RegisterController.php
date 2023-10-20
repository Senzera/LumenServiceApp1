<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        // Tampilkan formulir registrasi
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi data masukan dari formulir registrasi
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Buat pengguna baru
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

        // Redirect ke halaman login
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan masuk.');
    }
}
