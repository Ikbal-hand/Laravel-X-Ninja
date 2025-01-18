<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrmawaController extends Controller
{
    public function index()
    {
        $organizer = DB::select('select * from organisasi_mahasiswas');
        return view('kehidupan-kampus.ormawa', data: compact(var_name:'organizer'));
    }
}
