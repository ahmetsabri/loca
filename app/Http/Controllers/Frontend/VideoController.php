<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoCategory;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::filter(request('category'))->paginate();
        $categories = VideoCategory::all();
        $filters = explode(',', request('category'));
        return view('frontend.videos', compact('videos', 'categories', 'filters'));
    }
}
