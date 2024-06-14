<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Info;
use App\Models\Portfolio;
use App\Models\Province;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = QueryBuilder::for(Portfolio::class)->with(
            'infos',
            'images',
            'category.rootAncestor',
            'district.town.province'
        )->allowedFilters([
            AllowedFilter::scope('province'),
            AllowedFilter::scope('town'),
            AllowedFilter::scope('category'),
            AllowedFilter::scope('min_price'),
            AllowedFilter::scope('max_price'),
            AllowedFilter::scope('info'),
            AllowedFilter::scope('user_id'),
            AllowedFilter::scope('search'),
        ])->allowedSorts([
            'price_in_tl',
            'created_at',
        ])->paginate();

        $rootCategories = Category::isRoot()->with('children.children')->get();
        $provinces = Province::all();

        $filters = Info::has('portfolioValues')->where('filterable', true)->get();

        return view('frontend.portfolio.index', compact('portfolios', 'rootCategories', 'provinces', 'filters'));
    }

    public function show(Portfolio $portfolio)
    {
        $randomPortfolios = Portfolio::inRandomOrder()->with('images', 'category.rootAncestor', 'district.town.province')->limit(3)->where('id', '<>', $portfolio->id)->get();

        return view('frontend.portfolio.show', compact('portfolio', 'randomPortfolios'));
    }
}
