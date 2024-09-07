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
            'options.option',
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
        ])->defaultSort('-created_at')->paginate();

        $rootCategories = Category::isRoot()->with('children.children')->get();
        $provinces = Province::all();
        $selectedCategory = Category::find(request('filter.category'))?->load('rootAncestor');
        $selectedCategoryFilters = Category::find(request('filter.category'));

        $filters = collect();
        if ($selectedCategoryFilters) {
            $filters = Info::has('options')->with('options')->where('filterable', true)
            ->whereIn('category_id', $selectedCategoryFilters->bloodline()->pluck('id')->toArray())->get();
        }
        $locations = Portfolio::limit(200)->with('images')->get()->map(fn ($por) => [
            'lat' => (float) $por->lat_lon[0],
            'lng' => (float) $por->lat_lon[1],
            'title' => $por->title,
            'id' => $por->id,
            'img' => $por->images->first()?->full_url,
            'url' => route('frontend.portfolio.show', $por),
        ]);
        return view('frontend.portfolio.index', compact(
            'portfolios',
            'rootCategories',
            'provinces',
            'filters',
            'locations',
            'selectedCategory'
        ));
    }

    public function show(Portfolio $portfolio)
    {
        $randomPortfolios = Portfolio::inRandomOrder()->with('images', 'category.rootAncestor', 'district.town.province')->limit(3)->where('id', '<>', $portfolio->id)->get();

        return view('frontend.portfolio.show', compact('portfolio', 'randomPortfolios'));
    }
}
