<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureRequest;
use App\Models\Feature;

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

    public function destroy(Feature $info)
    {
        //TODO: DELETE ITS VALUES ALSO
        $info->delete();

        return back()->with('success', 'success');
    }
}
