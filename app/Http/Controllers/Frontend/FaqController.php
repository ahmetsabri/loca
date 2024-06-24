<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
    public function __invoke()
    {
        $questions = Faq::all();

        return view('frontend.faq', compact('questions'));
    }
}
