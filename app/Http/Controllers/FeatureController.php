<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureRequest;
use App\Models\Feature;
use App\Models\FeatureOption;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();

        return view('admin.features.index', compact('features'));
    }

    public function store(StoreFeatureRequest $request)
    {
        Feature::create($request->validated());

        return back()->with('success', 'success');
    }

    public function update(StoreFeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(FeatureOption $featureOption)
    {
        //TODO: DELETE ITS VALUES ALSO
        dd(213);
        $featureOption->delete();

        return back()->with('success', 'success');
    }
}
