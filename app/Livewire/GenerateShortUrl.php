<?php

namespace App\Livewire;

use AshAllenDesign\ShortURL\Exceptions\ShortURLException;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class GenerateShortUrl extends Component
{
    public string $url = '';
    public string $shortUrl = '';

    public function render(): View
    {
        return view('livewire.generate-short-url');
    }

    /**
     * @throws ShortURLException
     */
    public function generate(): void
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $shortURLObject = $builder->destinationUrl($this->url)->make();
        $this->shortUrl = $shortURLObject->default_short_url;

        $this->reset('url');
    }
}
