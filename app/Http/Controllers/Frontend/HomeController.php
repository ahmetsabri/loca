<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('infos', 'images', 'category.rootAncestor', 'district.town.province')->latest()->limit(6)->get();
        $rootCategories = Category::isRoot()->with('children.children')->get();
        return view('index', compact('portfolios', 'rootCategories'));
    }
}
