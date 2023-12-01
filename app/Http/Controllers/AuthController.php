<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $user->update([
        //     'api_token' => $token->plainTextToken,
        // ]);
        // $user->save();

        return response()->json([
            'message' => 'Login Success',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    function logout(Request $request)
    {
        // $request->user()->currentAccessToken()->delete();
        $user = Admin::find(Auth::id());
        $user->tokens()->delete();
        return response()->json([
            'message' => 'logout success', 'all_tokens' => Auth::user()->tokens,
        ]);
    }
}
