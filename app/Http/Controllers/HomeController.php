<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $reports = DB::select(query: 'select * from news_reports limit 6');
    $majors =DB::select(query:'select*from majors');

    return view("home.index", compact('reports','majors'));
}
}
