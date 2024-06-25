<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
    public $id;
    public $name;
    public $type;
    public $placeholder;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null, $name = null, $type = 'text', $placeholder = '', $value = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-field');
    }
}
