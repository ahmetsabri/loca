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
            ])->with('images', 'flats')->paginate(9);
        $provinces = Province::all();

        $locations = Project::limit(200)->get()->map(fn ($project) => [
            'lat' => (float) $project->lat_lon[0],
            'lng' => (float) $project->lat_lon[1],
            'title' => $project->title,
            'id' => $project->id,
            'url' => route('frontend.project.show', $project),
            'img' => $project->images->first()->full_url,
        ]);

        return view('frontend.project.index', compact('projects', 'provinces', 'locations'));
    }

    public function show(Project $project)
    {
        $projects = Project::inRandomOrder()->with('images', 'flats')->limit(3)->get();

        return view('frontend.project.show', compact('project', 'projects'));
    }
}
