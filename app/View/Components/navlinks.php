<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navlinks extends Component
{
    /**
     * Create a new component instance.
     */

    public string $name;
    public string $route;

    public function __construct($name, $route)
    {
        $this->name = $name;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navlinks');
    }
}
