<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate();

        return view('admin.teams.index', compact('teams'));
    }

    public function store(StoreTeamRequest $request)
    {
        Team::create($request->validated());

        return back()->with('success', 'success');
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return back()->with('success', 'success');
    }
}
