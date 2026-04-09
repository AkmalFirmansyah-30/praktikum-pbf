<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
        return view ('booking');
    }
    public function hasil(Request $request){
        $nama = $request->input('nama');
        $studio = $request->input('studio');
        $kelas = $request->input('kelas');
        $jmltiket = $request->input('jmltiket');

        if ($studio == 'Studio 1') {
            $bt="Opik";
        } elseif ($studio == 'Studio 2') {
            $bt="Raihan";
        }

        if ($kelas == 'VIP') {
            $harga = 50000;
        } elseif ($kelas == 'Festival') {
            $harga = 25000;
        }
        $total = $harga * $jmltiket;
        return view('hasil', compact('nama', 'studio', 'kelas', 'jmltiket', 'bt', 'harga', 'total'));
    }
}