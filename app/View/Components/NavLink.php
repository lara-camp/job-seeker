<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public $link, $title, $class;
    /**
     * Create a new component instance.
     */
    public function __construct($link = "javascript:void(0)", $title = "Title", $class = "")
    {
        $this->link = $link;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
