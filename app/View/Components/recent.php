<?php

namespace App\View\Components;

use Illuminate\View\Component;

class recent extends Component
{
    public $posts;
    public function __construct($posts)
    {
        $this->posts = $posts;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.recent');
    }
}
