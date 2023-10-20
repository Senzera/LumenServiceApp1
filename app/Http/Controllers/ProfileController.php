<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Tampilkan profil pengguna yang sedang masuk
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
