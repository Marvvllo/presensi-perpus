<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(AuthController::class)->middleware('auth:sanctum')->group(['prefix' => 'auth'], function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
      Route::get('logout', 'logout');
      Route::get('user', 'user');

});