<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use App\Models\VideoCategory;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $vidoeCategories = VideoCategory::all();
        return view('admin.video.index', compact('videos', 'vidoeCategories'));
    }

    public function store(StoreVideoRequest $request)
    {
        Video::create($request->validated());

        return back()->with('success', 'success');
    }

    public function update(UpdateVideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return back()->with('success', 'success');
    }
}
