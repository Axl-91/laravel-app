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

    public function edit(Request $request, $id) {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
            
        return redirect()
                ->route("posts.index")
                ->with('success', 'Post edited successfully');
    }

    public function destroy($id) {
        $post = Post::find($id);

        $post->delete();

        return redirect()
                ->route("posts.index")
                ->with('success', 'Post deleted successfully');
    }
}
