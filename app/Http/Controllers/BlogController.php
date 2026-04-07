<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Method untuk route /blog
    public function index()
    {
        return view('master'); 
    }

    // Method untuk route /tentang
    public function tentang()
    {
        return view('master'); 
    }

    // Method untuk route /kontak
    public function kontak()
    {
        return view('master'); 
    }
}