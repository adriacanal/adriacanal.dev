<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Picture extends Component
{
    public function __construct(
        public string $name,
        public array $defaultSizes,
        public array $sizes = [],
        public string $alt = '',
    ) {
    }

    public function render(): View
    {
        return view('components.picture');
    }
}
