<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index() {
        $karyawan = DB::table('karyawan')->get();
        return view('index', ['karyawan' => $karyawan]);
    }

    public function tambah() {
        return view('tambah');
    }

    public function store(Request $request) {
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/karyawan');
    }

    public function edit($id) {
        $karyawan = DB::table('karyawan')->where('karyawan_id', $id)->get();
        return view('edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request) {
        DB::table('karyawan')->where('karyawan_id', $request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/karyawan');
    }

    public function hapus($id) {
        DB::table('karyawan')->where('karyawan_id', $id)->delete();
        return redirect('/karyawan');
    }

    public function laporan() {
        $karyawan = DB::table('karyawan')->get();
        return view('laporan', ['karyawan' => $karyawan]);
    }
}