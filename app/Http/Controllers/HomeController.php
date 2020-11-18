<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('halaman_utama.index');
    }
    public function result()
    {
        return view('halaman_utama.mantap');
    }
    public function resultb()
    {
        return view('halaman_utama.halaman_kedua');
    }
    public function resultc()
    {
        return view('halaman_utama.halaman_ketiga');
    }
    public function halaman_terakhir()
    {
        return view('halaman_utama.halaman_terakhir');
    }
}
