<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page as FilamentPage;
use Livewire\Component;

class Page extends Component
{
    public Model $page;

    public function mount($slug): void
    {
        $page = FilamentPage::query()->where('slug', $slug)->first();

        if ($page === null) {
            abort(404);
        }

        $this->page = $page;
    }

    public function render(): View
    {
        return view('livewire.page');
    }
}
