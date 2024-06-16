<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Province;
use App\Models\Video;
use App\Models\VideoCategory;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('infos', 'images', 'category.rootAncestor', 'district.town.province')->latest()->limit(6)->get();
        $rootCategories = Category::isRoot()->with('children.children')->get();
        $provinces = Province::all();
        $videos = Video::limit(5)->get();
        $videoCategories = VideoCategory::all();
        return view('index', compact('videos', 'videoCategories', 'portfolios', 'rootCategories', 'provinces'));
    }
}
