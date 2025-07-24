<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_tr' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'hashtag1_en' => 'nullable|string|max:255',
            'hashtag2_en' => 'nullable|string|max:255',
            'hashtag3_en' => 'nullable|string|max:255',
            'hashtag1_tr' => 'nullable|string|max:255',
            'hashtag2_tr' => 'nullable|string|max:255',
            'hashtag3_tr' => 'nullable|string|max:255',
            'hashtag1_ru' => 'nullable|string|max:255',
            'hashtag2_ru' => 'nullable|string|max:255',
            'hashtag3_ru' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        $slide = Slide::create([
            'title' => [
                'en' => $validated['title_en'],
                'tr' => $validated['title_tr'],
                'ru' => $validated['title_ru']
            ],
            'hashtags' => [
                'en' => [
                    $validated['hashtag1_en'],
                    $validated['hashtag2_en'],
                    $validated['hashtag3_en']
                ],
                'tr' => [
                    $validated['hashtag1_tr'],
                    $validated['hashtag2_tr'],
                    $validated['hashtag3_tr']
                ],
                'ru' => [
                    $validated['hashtag1_ru'],
                    $validated['hashtag2_ru'],
                    $validated['hashtag3_ru']
                ]
            ],
            'order' => $validated['order'] ?? 0,
            'is_active' => $validated['is_active'] ?? true
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('slides', 'public');
            $slide->images()->create(['path' => $path]);
        }

        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully.');
    }

    public function update(Request $request, Slide $slide)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_tr' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'hashtag1_en' => 'nullable|string|max:255',
            'hashtag2_en' => 'nullable|string|max:255',
            'hashtag3_en' => 'nullable|string|max:255',
            'hashtag1_tr' => 'nullable|string|max:255',
            'hashtag2_tr' => 'nullable|string|max:255',
            'hashtag3_tr' => 'nullable|string|max:255',
            'hashtag1_ru' => 'nullable|string|max:255',
            'hashtag2_ru' => 'nullable|string|max:255',
            'hashtag3_ru' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        $slide->update([
            'title' => [
                'en' => $validated['title_en'],
                'tr' => $validated['title_tr'],
                'ru' => $validated['title_ru']
            ],
            'hashtags' => [
                'en' => [
                    $validated['hashtag1_en'],
                    $validated['hashtag2_en'],
                    $validated['hashtag3_en']
                ],
                'tr' => [
                    $validated['hashtag1_tr'],
                    $validated['hashtag2_tr'],
                    $validated['hashtag3_tr']
                ],
                'ru' => [
                    $validated['hashtag1_ru'],
                    $validated['hashtag2_ru'],
                    $validated['hashtag3_ru']
                ]
            ],
            'order' => $validated['order'] ?? $slide->order,
            'is_active' => $validated['is_active'] ?? $slide->is_active
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($slide->images->isNotEmpty()) {
                Storage::disk('public')->delete($slide->images->first()->path);
                $slide->images()->delete();
            }

            $path = $request->file('image')->store('slides', 'public');
            $slide->images()->create(['path' => $path]);
        }

        return redirect()->route('admin.slides.index')->with('success', 'Slide updated successfully.');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.form', compact('slide'));
    }



    public function destroy(Slide $slide)
    {
        // Delete associated images from storage
        foreach ($slide->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted successfully.');
    }

    public function deleteImage(Image $image)
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();
        return back()->with('success', 'Image deleted successfully.');
    }
}
