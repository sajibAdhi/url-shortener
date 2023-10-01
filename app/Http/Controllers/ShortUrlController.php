<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('short-url');
    }

}
