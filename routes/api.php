<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('presensi', [PresensiController::class, 'getPresensiSiswa']);
    Route::get('presensi/guru', [PresensiController::class, 'getPresensiGuru']);

    Route::get('izin', [PresensiController::class, 'getIzin']);
    Route::get('sakit', [PresensiController::class, 'getSakit']);
    Route::get('absen', [PresensiController::class, 'getAbsen']);
    Route::get('check', [PresensiController::class, 'checkAbsen']);
    Route::get('cek-kehadiran', [PresensiController::class, 'cekKehadiran']);

    Route::post('izin', [PresensiController::class, 'reqIzin']);
    Route::post('dispen', [PresensiController::class, 'reqDispen']);
    Route::post('presensi', [PresensiController::class, 'presensi']);
    Route::put('izin/{id}', [PresensiController::class, 'accIzin'])->middleware('IsAdmin');
    Route::put('dispen/{id}', [PresensiController::class, 'accDispen'])->middleware('IsAdmin');
});

Route::post('presensi-rfid', [PresensiController::class, 'presensi']);
Route::resource('siswa', SiswaController::class);
