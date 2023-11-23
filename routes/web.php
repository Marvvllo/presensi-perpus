<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
use App\Models\Admin;
use App\Models\Presensi;
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

Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $jumlahPresensi = Presensi::count();
        $jumlahAdmin = Admin::count();
        return view('dashboard.index', compact('jumlahPresensi', 'jumlahAdmin'));
    })->name('dashboard');
});

Route::controller(AuthController::class)->prefix('admin')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::resource('presensi', PresensiController::class);
