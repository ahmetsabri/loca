<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureOptionRequest;
use App\Http\Requests\UpdateFeatureOptionRequest;
use App\Models\Feature;
use App\Models\FeatureOption;

class FeatureOptionController extends Controller
{
    public function index(Feature $feature)
    {
        $feature = $feature->load('options');
        return view('admin.features.options.index', compact('feature'));
    }


    public function create(Feature $feature)
    {
        return view('admin.features.options.create');
    }

    public function store(StoreFeatureOptionRequest $request, Feature $feature)
    {
        $feature->options()->create($request->validated());
        return back()->with('success', 'success');
    }

    public function update(UpdateFeatureOptionRequest $request, Feature $feature, FeatureOption $featureOption)
    {
        $featureOption->update($request->validated());

        return back()->with('success', 'success');
    }


    public function destroy(Feature $feature, FeatureOption $featureOption)
    {
        //TODO:deleted related
        $featureOption->delete();
        return back()->with('success', 'success');
    }
}
