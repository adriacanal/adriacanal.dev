<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page as FilamentPage;
use Livewire\Component;

class Page extends Component
{
    public Model $page;

    public string $content;

    public function mount($slug): void
    {
        $page = FilamentPage::query()->where('slug', $slug)->first();

        if ($page === null) {
            abort(404);
        }

        $data = [
            'defaultSizes' => [
                'width' => 735,
                'height' => 546
            ],
            'attributes' => 'loading="lazy"'
        ];

        $content = $page->body;

        preg_match_all('/<span class="attachment__name">(.+?)<\/span>/', $content, $alts);
        preg_match_all('/src\s*=\s*"(.+?)"/', $content, $images);
        if (isset($images[1], $alts[1])) {
            foreach ($images[1] as $index => $image) {
                $data['name'] = explode('storage/', $image)[1] ?? '';
                $data['alt'] = $alts[1][$index] ?? '';
                $content = preg_replace(
                    '/<figure([\w\W]+?)src\s*=\s*"(.+?)' . $data['name'] . '"([\w\W]+?)<\/figure>/',
                    view('components.picture', $data)->render(),
                    $content
                );
            }
        }

        $this->page = $page;
        $this->content = $content;
    }

    public function render(): View
    {
        return view('livewire.page');
    }
}
