<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    public $text;

    /**
     * Create a new component instance.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.title');
    }
}
