<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmbController extends Controller
{
    //
    public function index(){
        return view("PMBonline.index");
    }

    public function store(Request $request){

    }
}
