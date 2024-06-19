<?php

namespace App\Http\Controllers;

use App\Enums\CurrencyEnum;
use Illuminate\Http\Request;

class ChangeCurrencyController extends Controller
{
    public function __invoke(Request $request, $currency)
    {
        if (! in_array($currency, array_column(CurrencyEnum::cases(), 'value'))) {
            session(['currency' => CurrencyEnum::TRY->value]);

            return back();
        }
        session(['currency' => $currency]);

        return back();
    }
}
