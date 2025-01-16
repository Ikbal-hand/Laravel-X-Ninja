<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkreditasiController extends Controller
{

    public function index()
    {
        return view('profile.akreditasi');
    }
}
