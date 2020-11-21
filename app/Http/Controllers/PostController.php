<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return redirect('/posts');
    }

    public function update(Request $request, Post $post)
    {
        $post->fill([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
        $post->save();

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }

    public function new()
    {
        return view('posts.create');
    }
}
