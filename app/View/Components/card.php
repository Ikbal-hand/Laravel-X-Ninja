<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
   public $title;
   public $image;
   public $desc;
   public $route;
   public $btn;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $image, $desc, $route, $btn)
    {
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
        $this->route = $route;
        $this->btn = $btn;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card',);
    }





}
