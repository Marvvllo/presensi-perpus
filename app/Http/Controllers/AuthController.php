<?php

namespace App\Http\Controllers;

use App\Models\resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resource $resource)
    {
        //
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|string',
            'c_password' => 'required|same:password'
        ]);

        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }

    public function login(Request $request)
{
    $request->validate([
    'email' => 'required|string|email',
    'password' => 'required|string',
    'remember_me' => 'boolean'
    ]);

    $credentials = request(['email','password']);
    if(!Auth::attempt($credentials))
    {
    return response()->json([
        'message' => 'Unauthorized'
    ],401);
    }

    $user = $request->user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->plainTextToken;

    return response()->json([
    'accessToken' =>$token,
    'token_type' => 'Bearer',
    ]);
}
public function user(Request $request)
{
    return response()->json($request->user());
}

public function logout(Request $request)
{
    $request->user()->tokens()->delete();

    return response()->json([
    'message' => 'Successfully logged out'
    ]);

}
}
