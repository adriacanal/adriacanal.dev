<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class App extends Component
{
    public function render(): View
    {
        return view('layouts.app');
    }
}
