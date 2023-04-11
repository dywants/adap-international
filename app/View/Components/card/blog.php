<?php

namespace App\View\Components\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class blog extends Component
{
    /**
     * Create a new component instance.
     */
    public String $datePost;
    public String $title;
    public String $description;
    public String $imagePost;

    public function __construct($datePost, $description, $imagePost, $title)
    {
        $this->title = $title;
        $this->description = $description;
        $this->datePost = $datePost;
        $this->imagePost = $imagePost;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.blog');
    }
}
