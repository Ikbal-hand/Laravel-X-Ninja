<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrmawaController extends Controller
{
        public function index()
    {
        $ormawas = DB::select('select*from organisasi_mahasiswas');
        return view('kehidupan-kampus.ormawa', compact('ormawas'));
    }

}
