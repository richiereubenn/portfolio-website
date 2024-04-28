<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardComponent extends Component
{
    public $imageSrc;
    public $title;
    public $duration;
    public $parts;
    public $description;

    public function __construct($imageSrc, $title, $duration, $parts, $description)
    {
        $this->imageSrc = $imageSrc;
        $this->title = $title;
        $this->duration = $duration;
        $this->parts = $parts;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.card-component');
    }
}
