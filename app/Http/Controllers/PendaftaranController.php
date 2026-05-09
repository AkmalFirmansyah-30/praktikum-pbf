<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
        return view('pendaftaran');
    }

    public function hasil(Request $request){
        $jalur = $request->jalur;

        if(in_array($jalur, ['SNBP', 'SNBT'])){
            $uangPangkal = "0 (Tidak bayar uang pangkal untuk jalur {$jalur})";
        } else {
            $uangPangkal = $request->bsp ?: "Belum diisi untuk jalur Mandiri";
        }

        return "<h2>Data Pendaftaran Perkuliahan</h2><br>
        Nama : ".$request->nama."<br>
        Tempat Lahir : ".$request->tempat_lahir."<br>
        Tanggal Lahir : ".$request->tanggal_lahir."<br>
        Jenis Kelamin : ".$request->jk."<br>
        No HP : ".$request->nohp."<br>
        Alamat : ".$request->alamat."<br>
        Jurusan : ".$request->jurusan."<br>
        Jalur Pendaftaran : ".$jalur."<br>
        Uang Pangkal / Sumbangan Pengembangan Institusi : ".$uangPangkal."<br>
        Biaya Semester : ".$request->semester."<br>
        Metode Bayar : ".$request->metode."<br>
        Tanggal Bayar : ".$request->tgl_bayar."<br>
        <br><a href='/pendaftaran'>Kembali</a>";
    }
}