<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Picture extends Component
{

    public function __construct(
        public string $name,
        public array $sizes,
        public array $defaultSizes,
        public string $alt = '',
    ) {}

    public function render(): View
    {
        return view('components.picture');
    }
}
