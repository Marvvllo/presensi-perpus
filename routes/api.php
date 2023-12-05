<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
use App\Models\Admin;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('presensi', PresensiController::class);
    Route::get('/count', function () {
        $presensiCount = Presensi::count();
        $adminCount = Admin::count();

        return response()->json([
            'presensi_count' => $presensiCount,
            'admin_count' => $adminCount,
        ], 200);
    });
});
