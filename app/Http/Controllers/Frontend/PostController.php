<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()->select('id', 'created_at', 'title', 'slug')->with('image')->when($request->search, function ($query) use ($request) {
            $query->where('title->'.app()->getLocale(), 'like', '%'.$request->search.'%');
        })->paginate();

        return view('frontend.blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('frontend.blog.show', compact('post'));
    }
}
