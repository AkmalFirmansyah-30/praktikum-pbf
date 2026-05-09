<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        return view('tiket_form');
    }

    public function pesan(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $tujuan = $request->input('tujuan');
        $jumlah = $request->input('jumlah');

        if ($tujuan == 'Solo') {
            $harga = 450000;
        } elseif ($tujuan == 'Semarang') {
            $harga = 350000;
        } elseif ($tujuan == 'Yogyakarta') {
            $harga = 400000;
        } elseif ($tujuan == 'Surabaya') {
            $harga = 550000;
        } else {
            $harga = 0;
        }

        $total_sementara = $harga * $jumlah;

        if ($jumlah >= 3) {
            $diskon = 0.10 * $total_sementara; 
        } else {
            $diskon = 0;
        }

        $total_bayar = $total_sementara - $diskon;

        return view('tiket_hasil', compact(
            'nama', 'alamat', 'tujuan', 'harga', 'jumlah', 'diskon', 'total_bayar'
        ));
    }
        
}
