<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    public function __invoke($locale)
    {
        session()->put('locale', $locale);

        return redirect()->back();
    }
}