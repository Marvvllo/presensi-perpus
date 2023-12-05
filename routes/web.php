<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
use App\Models\Admin;
use App\Models\Presensi;
use App\Http\Controllers\PengawasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::prefix('auth')->middleware('auth:sanctum')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);
});

Route::resource('pengawas', PengawasController::class);

