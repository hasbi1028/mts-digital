<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
use Carbon\Carbon;

class AuthController extends Controller
{
    /**
     * Handle user registration
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Ambil durasi expiration dari konfigurasi Sanctum
        $expirationMinutes = config('sanctum.expiration');

        // Buat token baru dengan waktu kedaluwarsa
        $token = $user->createToken('auth_token', ['*'], Carbon::now()->addMinutes($expirationMinutes));

        // Siapkan response
        return response()->json([
            'access_token' => $token->plainTextToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->accessToken->created_at)
                                  ->addMinutes($expirationMinutes)
                                  ->toDateTimeString(),
            'user' => new UserResource($user), // Gunakan UserResource untuk memformat data user
        ]);
    }

    /**
     * Handle user login
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Periksa apakah user ada dan password cocok
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.'
            ], 401); // 401 Unauthorized
        }

        // Hapus token yang sudah ada (opsional)
        // Ini berguna jika Anda ingin membatasi user hanya memiliki satu token aktif
        $user->tokens()->delete();

        // Ambil durasi expiration dari konfigurasi Sanctum
        $expirationMinutes = config('sanctum.expiration');

        // Buat token baru dengan waktu kedaluwarsa
        $token = $user->createToken('auth_token', ['*'], Carbon::now()->addMinutes($expirationMinutes));

        // Siapkan response
        return response()->json([
            'access_token' => $token->plainTextToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->accessToken->created_at)
                                  ->addMinutes($expirationMinutes)
                                  ->toDateTimeString(),
            'user' => new UserResource($user), // Gunakan UserResource untuk memformat data user
        ]);
    }

    /**
     * Handle user logout
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        // Hapus token yang sedang digunakan
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}