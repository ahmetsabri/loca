<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoCategoryRequest;
use App\Http\Requests\UpdateVideoCategoryRequest;
use App\Models\VideoCategory;

class VideoCategoryController extends Controller
{
    public function index()
    {
        $categories = VideoCategory::paginate(10);

        return view('admin.video_categories.index', compact('categories'));
    }

    public function store(StoreVideoCategoryRequest $request)
    {
        $videoCategory = VideoCategory::create($request->validated());

        return back()->with('success', 'success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoCategoryRequest $request, VideoCategory $videoCategory)
    {
        $videoCategory->update($request->validated());

        return back()->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoCategory $videoCategory)
    {
        $videoCategory->videos()->delete();
        $videoCategory->delete();

        return back()->with('success', 'success');
    }
}
