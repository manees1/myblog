<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    public function index()
    {
        // Fetch only the posts that belong to the logged-in author
        $posts = Post::where('user_id', Auth::id())->paginate(10);
        return view('author.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('author.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(), // Associate the post with the logged-in author
        ]);

        return redirect()->route('author.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        // Ensure that the author can only edit their own posts
        if ($post->user_id != Auth::id()) {
            return redirect()->route('author.posts.index')->with('error', 'Unauthorized access.');
        }

        return view('author.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if ($post->user_id != Auth::id()) {
            return redirect()->route('author.posts.index')->with('error', 'Unauthorized access.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($request->all());

        return redirect()->route('author.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->user_id != Auth::id()) {
            return redirect()->route('author.posts.index')->with('error', 'Unauthorized access.');
        }

        $post->delete();

        return redirect()->route('author.posts.index')->with('success', 'Post deleted successfully.');
    }
}
