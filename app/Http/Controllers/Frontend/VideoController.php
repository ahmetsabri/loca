<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoCategory;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(1);
        $categories = VideoCategory::all();

        return view('frontend.videos', compact('videos', 'categories'));
    }
}
