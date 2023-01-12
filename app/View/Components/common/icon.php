<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class icon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.icon');
    }
}
