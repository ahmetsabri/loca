<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Province;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = QueryBuilder::for(Project::class)
            ->allowedFilters([
                AllowedFilter::scope('province'),
                AllowedFilter::scope('town'),
                AllowedFilter::scope('min_price'),
                AllowedFilter::scope('max_price'),
                AllowedFilter::scope('search'),
            ])->paginate(9);
        $provinces = Province::all();

        return view('frontend.project.index', compact('projects', 'provinces'));
    }

    public function show(Project $project)
    {
        $projects = Project::inRandomOrder()->limit(3)->get();

        return view('frontend.project.show', compact('project', 'projects'));
    }
}
