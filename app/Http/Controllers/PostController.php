<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->paginate(5);
        return view("posts.index", compact("posts"));
    }

    public function create(): View
    {
        return view("posts.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "title" => "required",
            "body" => "required",
        ]);

        $post = new Post([
            "title" => $request["title"],
            "body" => $request["body"],
        ]);

        $post->save();

        return redirect()
            ->route("posts.index")
            ->with("success", "Post created successfully");
    }

    public function edit($id): View
    {
        $post = Post::query()->find($id);

        return view("posts.edit", compact("post"));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $post = Post::query()->find($id);

        $post->title = $request["title"];
        $post->body = $request["body"];
        $post->save();

        return redirect()
            ->route("posts.index")
            ->with("success", "Post edited successfully");
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::query()->find($id);

        $post->delete();

        return redirect()
            ->route("posts.index")
            ->with("success", "Post deleted successfully");
    }
}
