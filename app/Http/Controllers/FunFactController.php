<?php

namespace App\Http\Controllers;

use App\Models\FunFact;
use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function edit()
    {
        $funFact = FunFact::firstOrNew(['id' => 1]);
        return view('admin.fun_facts.edit', compact('funFact'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'customer_calls' => 'required|integer|min:0',
            'customers_hosted' => 'required|integer|min:0',
            'digital_contracts_signed' => 'required|integer|min:0',
            'property_transactions_completed' => 'required|integer|min:0',
            'properties_shown' => 'required|integer|min:0',
            'coffees_consumed' => 'required|integer|min:0',
        ]);

        $funFact = FunFact::firstOrNew(['id' => 1]);
        $funFact->fill($validated)->save();

        return back()->with('success', 'Fun Facts updated successfully!');
    }
}
