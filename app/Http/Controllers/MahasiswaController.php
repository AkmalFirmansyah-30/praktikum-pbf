<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = "Akmal Firmansyah";
        return view('mahasiswa2', ['nama' => $nama]);
    }

    public function biodata()
    {
    $nama = 'Akmal Firmansyah';
    $matakuliah = ['Pemrograman Framework', 'Framework Laravel', 'Bahasa Indonesia'];
    return view('biodata', [
        'nm' => $nama, 
        'makul' => $matakuliah]);
    }
}
