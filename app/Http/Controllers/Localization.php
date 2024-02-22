<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($locale): \Illuminate\Http\RedirectResponse
    {
        if (!in_array($locale, config('localization.locales'), true)) {
            abort(400);
        }

        session(['localization' => $locale]);

        return redirect()->back();
    }
}
