<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $activemenu = '';
    public function __construct($activemenu)
    {
        $this -> activemenu = $activemenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.MenuComponent');
    }
}
