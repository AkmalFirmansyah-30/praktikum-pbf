<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PendaftaranController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('mhs', [MhsController::class, 'index']);
Route::get('mahasiswa2', [MahasiswaController::class, 'index']);
Route::get('mhs/{nama}', [MhsController::class, 'getNama']);

// === ROUTE UNTUK FORM (Bab 7) ===
Route::get('biodata', [MhsController::class, 'biodata']);
Route::post('biodata/proses', [MhsController::class, 'proses']);

// === ROUTE BARU UNTUK PASSING DATA ARRAY (Bab 6) ===
// Menghubungkan URL /passing-data ke fungsi biodata di MahasiswaController
Route::get('passing-data', [MahasiswaController::class, 'biodata']);

Route::get('blog', [BlogController::class, 'index']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('kontak', [BlogController::class, 'kontak']);

Route::get('formulir', [BelajarController::class, 'index']);
Route::get('formulir/hasil', [BelajarController::class, 'hasil']);

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran/hasil', [PendaftaranController::class, 'hasil']);