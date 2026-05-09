<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Mahasiswa1Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('mhs', [MhsController::class, 'index']);
Route::get('mahasiswa2', [MahasiswaController::class, 'index']);
Route::get('mhs/{nama}', [MhsController::class, 'getNama']);

Route::get('biodata', [MhsController::class, 'biodata']);
Route::post('biodata/proses', [MhsController::class, 'proses']);

Route::get('passing-data', [MahasiswaController::class, 'biodata']);

Route::get('blog', [BlogController::class, 'index']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('kontak', [BlogController::class, 'kontak']);

Route::get('formulir', [BelajarController::class, 'index']);
Route::get('formulir/hasil', [BelajarController::class, 'hasil']);

Route::get('pendaftaran', [PendaftaranController::class, 'index']);
Route::get('pendaftaran/hasil', [PendaftaranController::class, 'hasil']);

Route::get('booking', [BookingController::class, 'booking']);
Route::post('hasil', [BookingController::class, 'hasil']);

Route::get('pesan-tiket', [TiketController::class, 'index']);
Route::post('pesan-tiket/hasil', [TiketController::class, 'pesan']);

Route::get('karyawan', [KaryawanController::class, 'index']);

Route::get('karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('karyawan/store', [KaryawanController::class, 'store']);
Route::get('karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('karyawan/update', [KaryawanController::class, 'update']);
Route::get('karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('laporan', [KaryawanController::class, 'laporan']);

Route::get('/mahasiswa', [Mahasiswa1Controller::class, 'index']);
Route::get('/mahasiswa/tambah', [Mahasiswa1Controller::class, 'tambah']);
Route::post('/mahasiswa/store', [Mahasiswa1Controller::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [Mahasiswa1Controller::class, 'edit']);
Route::post('/mahasiswa/update', [Mahasiswa1Controller::class, 'update']);
Route::get('/mahasiswa/hapus/{id}', [Mahasiswa1Controller::class, 'hapus']);
Route::get('/mahasiswa/laporan', [Mahasiswa1Controller::class, 'laporan']);