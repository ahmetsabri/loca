<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with(
            'infos',
            'images',
            'category.rootAncestor',
            'district.town.province'
        )->paginate();

        return view('frontend.portfolio.index', compact('portfolios'));
    }
}
