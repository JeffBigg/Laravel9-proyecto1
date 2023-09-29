<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    public function create(Post $post)
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->save();
        return to_route('posts.index');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->save();
        return to_route('posts.index', $post);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'post eliminado');
    }
}
