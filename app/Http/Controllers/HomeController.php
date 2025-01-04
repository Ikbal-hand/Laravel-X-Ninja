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
                'image' => 'https://source.unsplash.com/1600x900/?computer',
                'title' => 'Teknik Informatika',
                'description' => 'Di Jurusan Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.'
            ],
            [
                'image' => 'https://source.unsplash.com/1600x900/?industrial',
                'title' => 'Teknik Industri',
                'description' => 'Keilmuan Teknik Industri lahir dari keinginan untuk memperbaiki sistem pekerjaan yang sudah ada. Itu dibuktikan dengan salah satu bahasan dalam keilmuan Teknik Industri yang menerapkan Plan, Do, Check, Action.'
            ]
        ]
    ]);
}
}
