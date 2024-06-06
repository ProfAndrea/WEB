<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class aula24 extends Component
{

    /**
     * Create a new component instance.
     */
    public $newmen;
    public $dados;
    
    public function __construct()
   
    { 


        $this->newmen=$novamensagem;
        $this->dados= $mensagenantiga;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.aula24');
    }
}
