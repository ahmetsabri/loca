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
        $about = About::first();
        // Prepare data for About creation
        $data = $request->validated();

        // Handle file uploads for images
        $imageFields = ['top_image', 'bottom_right_image', 'bottom_left_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                \Storage::disk('public')->delete($about->$field);
                $file = $request->file($field);
                $path = $file->store('about', 'public');
                $data[$field] = $path;
            }
        }
        // Create new About record
        $about->update($data);

        return back()->with('success', 'success')->with(compact('about'));
    }

    public function destroy(About $about)
    {
        $about->delete();
    }
}
