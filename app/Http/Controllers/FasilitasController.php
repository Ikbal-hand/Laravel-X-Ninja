<?php

namespace App\Http\Controllers;

use CreateFasilitasKampusesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitases = DB::select('select*from fasilitas_kampuses');
        return view('kehidupan-kampus.fasilitas',compact('fasilitases'));

    }
}
