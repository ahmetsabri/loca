<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->select('id', 'title', 'created_at')->paginate(1);

        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->safe()->except('image'));

        $path = $request->file('image')->storePublicly('blog/images', ['disk' => 'public']);

        $post->image()->create(compact('path'));

        return back()->with('success', 'success');
    }

    public function edit(Post $post)
    {
        $post = $post->load('image');

        return view('admin.blog.create', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->safe()->except('image'));
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image->path);
            $path = $request->file('image')->storePublicly('blog/images', ['disk' => 'public']);
            $post->image()->update(compact('path'));
        }

        return back()->with('success', 'success');
    }

    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image->path);
        $post->image()->delete();
        $post->delete();

        return back()->with('success', 'success');
    }
}
