<?php

namespace App\Http\Controllers;

use App\Models\CustomShortUrl;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $user = User::with('shortUrls')->find(auth()->id());
        return view('dashboard', compact('user'));
    }
}
