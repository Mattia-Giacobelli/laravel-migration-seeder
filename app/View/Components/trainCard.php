<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrainCard extends Component
{
    public $train;

    public function __construct($train)
    {
        $this->train = $train;
    }

    public function render(): View|Closure|string
    {
        return view('components.train-card');
    }
}
