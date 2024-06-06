<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class web extends Component
{public $w1;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->w1=$w1;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.web');
    }
}
