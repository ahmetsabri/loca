<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Department;
use App\Models\Portfolio;
use App\Models\User;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class TeamController extends Controller
{
    public function index()
    {
        $departments = Department::has('users')->with('users.image')->get();

        return view('frontend.team.index', compact('departments'));
    }

    public function show(User $user)
    {
        $cateogries = Category::isRoot()->with('children')->get();
        $portfolios = QueryBuilder::for(Portfolio::class)->with(
            'infos',
            'images',
            'category.rootAncestor',
            'district.town.province'
        )->allowedFilters([
            AllowedFilter::scope('category'),
            AllowedFilter::scope('parent_category', 'category'),

            ])->where('user_id', $user->id)->paginate();

        return view('frontend.team.show', compact('user', 'cateogries', 'portfolios'));
    }
}
