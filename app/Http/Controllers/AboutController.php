<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('admin.about.create', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    public function store(StoreAboutRequest $request)
    {
        About::first()?->delete();
        $about = About::create(($request->validated()));

        return back()->with('success', 'success')->with(compact('about'));
    }

    public function destroy(About $about)
    {
        $about->delete();
    }
}
