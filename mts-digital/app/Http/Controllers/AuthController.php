<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    // Metode login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Memeriksa kecocokan password
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.'
            ], 401);
        }

        // Membuat token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Mengembalikan response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => new UserResource($user),
        ]);
    }

    // Metode logout
    public function logout(Request $request)
    {
        // Menghapus token saat ini
        $request->user()->currentAccessToken()->delete();

        // Mengembalikan response
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}