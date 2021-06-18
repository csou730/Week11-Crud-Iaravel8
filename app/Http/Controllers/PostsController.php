<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        Post::create($input);
        return redirect(route('posts.index'));
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');
        return view('posts.edit', [
            'categories' => $categories,
            'post' => $post
        ]);
    }

    public function update(Post $post, Request $request)
    {
        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        return redirect(route('posts.index'));
    }
}
