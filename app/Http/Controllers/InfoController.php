<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoRequest;
use App\Models\Category;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::all();

        return view('admin.info.index', compact('infos'));
    }

    public function create()
    {
        $categories = Category::isRoot()->get();

        return view('admin.info.create', compact('categories'));
    }

    public function store(StoreInfoRequest $request)
    {
        Info::create($request->validated());

        return back()->with('success', 'success');
    }

    public function edit(Info $info)
    {
        $categories = Category::isRoot()->get();
        $selectedCategory = $info->load('category')?->cateogry?->bloodline;
        return view('admin.info.edit', compact('categories', 'selectedCategory', 'info'));
    }

    public function update(StoreInfoRequest $request, Info $info)
    {
        $info->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Info $info)
    {
        $info->delete();

        return back()->with('success', 'success');
    }
}
