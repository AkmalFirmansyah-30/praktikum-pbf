<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        return view('mhs');
    }

    public function getNama ($nama) {
        return $nama;
    }

    public function biodata() {
        return view('mhs2');
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $kelas = $request->kelas;
        
        return 'Nama: ' . $nama . ',<br> Kelas: ' . $kelas;
    }
}
