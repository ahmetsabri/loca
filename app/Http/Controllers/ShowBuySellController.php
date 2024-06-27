<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ShowBuySellController extends Controller
{
    public function __invoke(Request $request)
    {
        $provinces = Province::all();
        return view('frontend.buy_sell', compact('provinces'));
    }
}
