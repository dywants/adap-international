<?php

namespace App\View\Components\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class services extends Component
{
    public String $title;
    public String $paragraph;
    public String $image;
    public String $url;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$paragraph, $image, $url)
    {
        $this->title = $title;
        $this->paragraph = $paragraph;
        $this->image = $image;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.services');
    }
}
