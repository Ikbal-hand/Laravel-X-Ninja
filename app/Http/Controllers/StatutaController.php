<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatutaController extends Controller
{
    public function index()
    {
        return view('profile.statuta');
    }
}
