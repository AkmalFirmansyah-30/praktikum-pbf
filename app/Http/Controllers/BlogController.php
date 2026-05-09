<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('master'); 
    }

    public function tentang()
    {
        return view('master'); 
    }

    public function kontak()
    {
        return view('master'); 
    }
}