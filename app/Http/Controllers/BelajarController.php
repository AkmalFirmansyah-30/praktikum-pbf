<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index(){
        return view('formulir');
    }

    public function hasil(Request $request){
        $nim = $request->input('nim');
        $nama = $request->input('nama');
        $alamat = $request->input('almt');
        $ttl = $request->input('tglhr');
        $gender = $request->input('jk');
        $kerja = $request->input('kerja');
        $email = $request->input('email');
        $hobi1 = $request->input('hobi1');
        $hobi2 = $request->input('hobi2');
        $hobi3 = $request->input('hobi3');

        return "<h2>Data Pendaftaran Formulir Kelas Laravel</h2><br>
        NIM : ".$nim."<br>
        Nama : ".$nama."<br>
        Alamat : ".$alamat."<br>
        Tempat/Tanggal Lahir : ".$ttl."<br>
        Gender : ".$gender."<br>
        Pekerjaan : ".$kerja."<br>
        E-Mail : ".$email."<br>
        Hobi : ".$hobi1.", ".$hobi2.", ".$hobi3."<br>
        <br><a href='/formulir'>Kembali</a>";
    }
}