<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\resource;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $token = $request->user()->createToken('auth_token')->plainTextToken;

        $user = Admin::find(Auth::id());

        return response()->json([
            'message' => 'Login Success',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    function logout(Request $request)
    {
        // $user = Admin::find(Auth::id());
        // $user->currentAccessToken->delete();
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'logout success', 'active_tokens' => Auth::user()->tokens,
        ]);
    }
}
