<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Town;

class CountryController extends Controller
{
    public function towns(Province $province)
    {
        $towns = Town::where('province_id', $province->id)->get();

        return response()->json(compact('towns'));
    }

    public function districts(?Town $town = null)
    {
        $districts = District::where('town_id', $town->id)->get();

        return response()->json(compact('districts'));
    }
}
