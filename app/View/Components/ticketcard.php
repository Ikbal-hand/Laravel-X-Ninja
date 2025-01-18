<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ticketcard extends Component
{

    public $month;
    public $timeline;
    public $name;
    public $image_url;
    public $descriptions;

    /**
     * Create a new component instance.
     */
    public function __construct($timeline,$month,$name,$image_url,$descriptions)
    {
        $this->timeline = $timeline;
        $this ->month = $month;
        $this ->name = $name;
        $this ->image_url = $image_url;
        $this ->descriptions = $descriptions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ticketcard');
    }
}
