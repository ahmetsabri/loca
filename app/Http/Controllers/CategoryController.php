<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::isRoot()->withCount('children')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $parentId = Category::find($request->parent_id)?->id;
        Category::create(array_merge(['parent_id' => $parentId], $request->validated()));

        return back()->with('success', 'success');
    }

    public function show(Category $category)
    {
        $category = $category->load('children', 'ancestorsAndSelf')->loadCount('children');

        return view('admin.categories.show', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return back()->with('success', 'success');
    }

    public function destroy(Category $category)
    {
        foreach ($category->descendants as $child) {
            $child->delete();
        }

        $category->delete();

        return back()->with('success', 'success');
    }

    public function getChildren(Category $category)
    {
        $children = $category->load('children')->children;
        return response()->json(compact('children'));
    }
}
