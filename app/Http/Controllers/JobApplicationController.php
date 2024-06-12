<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobs = JobApplication::paginate();

        return view('admin.job_applications.index', compact('jobs'));
    }

    public function destroy(JobApplication $jobApplication)
    {
        $jobApplication->delete();

        return back()->with('success', 'success');
    }
}
