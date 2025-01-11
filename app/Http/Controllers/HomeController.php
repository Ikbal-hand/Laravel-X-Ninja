<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    return view("home.index", [
        'majors' => [
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1720287601920-ee8c503af775?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Teknik Informatika',
                'description' => 'Di Jurusan Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.'
            ],
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1661492172846-06f14551c039?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Teknik Industri',
                'description' => 'Keilmuan Teknik Industri lahir dari keinginan untuk memperbaiki sistem pekerjaan yang sudah ada. Itu dibuktikan dengan salah satu bahasan dalam keilmuan Teknik Industri yang menerapkan Plan, Do, Check, Action.'
            ]
        ]
    ]);
}
}
