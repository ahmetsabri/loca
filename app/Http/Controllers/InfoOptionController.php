<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureOptionRequest;
use App\Http\Requests\UpdateFeatureOptionRequest;
use App\Models\Info;
use App\Models\InfoOption;

class InfoOptionController extends Controller
{
    public function index(Info $info)
    {
        $info = $info->load('options');

        return view('admin.info.options.index', compact('info'));
    }

    public function create(Info $info)
    {
        return view('admin.info.options.create');
    }

    public function store(StoreFeatureOptionRequest $request, Info $info)
    {
        $info->options()->create($request->validated());

        return back()->with('success', 'success');
    }

    public function show(InfoOption $infoOption)
    {
        //
    }

    public function edit(InfoOption $infoOption)
    {
        //
    }

    public function update(UpdateFeatureOptionRequest $request, Info $info, InfoOption $infoOption)
    {
        $infoOption->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Info $info, InfoOption $infoOption)
    {
        //TODO:deleted related
        $infoOption->delete();

        return back()->with('success', 'success');
    }
}
