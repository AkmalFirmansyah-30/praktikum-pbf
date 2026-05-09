<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mahasiswa1Controller extends Controller
{
    public function index() {
        $mahasiswa = DB::table('mahasiswas')->get();
        return view('indexmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah() {
        return view('tambahmhs');
    }

    public function store(Request $request) {
        DB::table('mahasiswas')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa');
    }

    public function edit($id) {
        $mahasiswa = DB::table('mahasiswas')->where('id', $id)->get();
        return view('editmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request) {
        DB::table('mahasiswas')->where('id', $request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa');
    }

    public function hapus($id) {
        DB::table('mahasiswas')->where('id', $id)->delete();
        return redirect('/mahasiswa');
    }

    public function laporan() {
        $mahasiswa = DB::table('mahasiswas')->get();
        return view('laporanmhs', ['mahasiswa' => $mahasiswa]);
    }
}