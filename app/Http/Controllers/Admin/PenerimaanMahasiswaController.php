<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonMahasiswa;

class PenerimaanMahasiswaController extends Controller
{
    public function index()
    {
        $calonMahasiswa = CalonMahasiswa::all();
        return view('admin.penerimaan.index', compact('calonMahasiswa'));
    }

    public function show($id)
    {
        $calonMahasiswa = CalonMahasiswa::findOrFail($id);
        return view('admin.penerimaan.show', compact('calonMahasiswa'));
    }
}
