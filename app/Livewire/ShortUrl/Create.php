<?php

namespace App\Livewire\ShortUrl;

use AshAllenDesign\ShortURL\Facades\ShortURL;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required|string|max:255')]
    public string $url = '';
    public string $shortUrl = '';

    public function render(): View
    {
        return view('livewire.short-url.create');
    }

    public function store(): void
    {
        $validated = $this->validate();

        $shortURLObject = ShortURL::destinationURL($validated['url'])->secure(false)->make();
        $shortURLObject->user_id = auth()->user()->id;
        $shortURLObject->save();
        $this->shortUrl = $shortURLObject->default_short_url;

        $this->url = '';
    }
}
