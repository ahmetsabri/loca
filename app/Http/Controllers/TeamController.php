<?php

namespace App\Http\Controllers;

use App\Enums\DepartmentType;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $users = User::where('id', '<>', auth()->id())->with('image', 'department')->paginate();

        return view('admin.teams.index', compact('users'));
    }

    public function create()
    {
        $departments = Department::where('type', DepartmentType::TEAM->value)->get();

        return view('admin.teams.create', compact('departments'));
    }

    public function edit(User $user)
    {
        $departments = Department::all();

        return view('admin.teams.edit', compact('departments', 'user'));
    }

    public function store(StoreTeamMemberRequest $request)
    {
        $data = $request->safe();
        $user = User::create($data->except('image'));
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storePublicly('user/images', ['disk' => 'public']);
            $user->image()->create(['path' => $path]);
        }

        return back()->with('success', 'success');
    }

    public function update(UpdateTeamRequest $request, User $user)
    {
        $data = $request->safe();
        $user->fill($data->except('image', 'password'));
        if ($data->filled('password')) {
            $user->password = bcrypt($data->password);
        }
        $user->save();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storePublicly('team/images', ['disk' => 'public']);
            if ($user->image) {
                Storage::disk('public')->delete($user->image->path);
            }
            $user->image()->update(['path' => $path]);
        }

        return back()->with('success', 'success');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'success');
    }
}
