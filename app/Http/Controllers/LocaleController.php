<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    public function __invoke($locale)
    {
        session(['locale' => $locale]);
        app()->setLocale($locale);
        return back();
    }
}
