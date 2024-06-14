<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Province;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('infos', 'images', 'category.rootAncestor', 'district.town.province')->latest()->limit(6)->get();
        $rootCategories = Category::isRoot()->with('children.children')->get();
        $provinces = Province::all();
        return view('index', compact('portfolios', 'rootCategories', 'provinces'));
    }
}
