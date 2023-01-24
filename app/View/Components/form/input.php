<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $iconPosition;
    public $type;
    public $name;
    public $placeholder;
    public $size;
    public $label;

    public function __construct($type,$name,$placeholder,$size, $icon="",$iconPosition="", $label="")
    {
        $this->type = $type;
        $this->$name = $$name;
        $this->size = $size;
        $this->icon = $icon;
        $this->label = $label;
        $this->iconPosition = $iconPosition;
        $this->$placeholder = $$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
