<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Department;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate();
        $departments = Department::all();

        return view('admin.teams.index', compact('teams', 'departments'));
    }

    public function store(StoreTeamRequest $request)
    {
        $data = $request->safe();
        $team = Team::create($data->except('image'));
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storePublicly('team/images', ['disk' => 'public']);
            $team->image()->create(['path' => $path]);
        }

        return back()->with('success', 'success');
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->safe()->except('image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->storePublicly('team/images', ['disk' => 'public']);
            if ($team->image) {
                Storage::disk('public')->delete($team->image->path);
            }
            $team->image()->update(['path' => $path]);
        }

        return back()->with('success', 'success');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return back()->with('success', 'success');
    }
}
