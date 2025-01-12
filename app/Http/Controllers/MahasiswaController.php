<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display the main page for "PMB Online".
     */
    public function index()
    {
        return view('mahasiswa-help.index');
    }
    
    public function upload()
    {
        return view('mahasiswa-help.upload');
    }

}