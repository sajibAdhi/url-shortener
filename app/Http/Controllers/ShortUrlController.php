<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('short-url.create');
    }

    public function show(string $short_url): \Illuminate\Http\RedirectResponse
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $shortURLObject = $builder->shortURL($short_url)->find();

        return redirect()->away($shortURLObject->destination_url);

    }
}
