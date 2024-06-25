<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Table extends Component
{
    /**
     * Create a new component instance.
     */

    public $headers;
    public $records;

    public function __construct(array $headers, array $records)
    {
        $this->headers = $headers;
        $this->records = $records;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
