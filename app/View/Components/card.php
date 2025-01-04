<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card',['majors' => [
            [
                'image' => 'https://source.unsplash.com/1600x900/?computer',
                'title' => 'Teknik Informatika',
                'description' => 'Di Jurusan Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.'
            ],
            [   'image' => 'https://source.unsplash.com/1600x900/?industrial',
                'title' => 'Teknik Industri',
                'description' => ('Keilmuan Teknik Industri lahir dari keinginan untuk memperbaiki sistem pekerjaan yang sudah ada. Itu dibuktikan dengan salah satu bahasan dalam keilmuan Teknik Industri yang menerapkan Plan, Do, Check, Action.')
            ]
        ]],);
    }





}
