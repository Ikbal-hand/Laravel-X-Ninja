<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin() {
        return view("dashboard.admin");
    }
    function calon() {
        return view("dashboard.calon");
    }
}
