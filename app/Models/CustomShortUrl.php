<?php

namespace App\Models;

use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomShortUrl extends ShortURL
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
        $this->fillable = array_merge($this->fillable, ['user_id']);
    }

    public function visitsCount(): Attribute
    {
        return new Attribute(
            get: fn() => $this->visits()->count()
        );
    }
}
