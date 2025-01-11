<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmbController extends Controller
{
    /**
     * Display the main page for "PMB Online".
     */
    public function index()
    {
        return view('PMBonline.index');
    }

    /**
     * Display the "Register" page for PMB Online.
     */
    public function register()
    {
        return view('PMBonline.register');
    }

    /**
     * Display the "Persyaratan" page for PMB Online.
     */
    public function persyaratan()
    {
        return view('PMBonline.persyaratan');
    }
}