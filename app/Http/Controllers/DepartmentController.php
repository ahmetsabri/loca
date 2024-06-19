<?php

namespace App\Http\Controllers;

use App\Enums\DepartmentType;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $types = array_column(DepartmentType::cases(), 'value');
        return view('admin.departments.index', compact('departments', 'types'));
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        Department::create($request->validated());

        return back()->with('success', 'success');
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('success', 'success');
    }
}
