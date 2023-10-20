<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->accessToken;

            return response()->json([
                'message' => 'Login berhasil',
                'user' => $user,
                'access_token' => $token,
            ]);
        }

        return response()->json(['message' => 'Login gagal'], 401);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->token()->revoke();

        return response()->json(['message' => 'Logout berhasil']);
    }
}
