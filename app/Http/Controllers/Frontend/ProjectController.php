<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(9);

        return view('frontend.project.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $projects = Project::inRandomOrder()->limit(3)->get();
        return view('frontend.project.show', compact('project', 'projects'));
    }
}
