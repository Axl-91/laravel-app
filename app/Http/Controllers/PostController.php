<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()
                ->route("posts.index")
                ->with('success', 'Post created successfully');
    }
}
