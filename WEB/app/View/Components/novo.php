<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class novo extends Component
{
    public $n1;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->n1=$n1;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.novo');
    }
}
