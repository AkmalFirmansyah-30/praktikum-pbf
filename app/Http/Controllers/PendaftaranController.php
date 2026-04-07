<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
        return view('pendaftaran');
    }

    public function hasil(Request $request){
        return "<h2>Data Pendaftaran Perkuliahan</h2><br>
        Nama : ".$request->nama."<br>
        Tempat Lahir : ".$request->tempat_lahir."<br>
        Tanggal Lahir : ".$request->tanggal_lahir."<br>
        Jenis Kelamin : ".$request->jk."<br>
        No HP : ".$request->nohp."<br>
        Alamat : ".$request->alamat."<br>
        Jurusan : ".$request->jurusan."<br>
        Biaya Sumbangan Pendidikan : ".$request->bsp."<br>
        Biaya Semester : ".$request->semester."<br>
        Metode Bayar : ".$request->metode."<br>
        Tanggal Bayar : ".$request->tgl_bayar."<br>
        <br><a href='/pendaftaran'>Kembali</a>";
    }
}