<?php


namespace App\Http\Controllers;


use App\Models\Post; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(12); // Fetching 12 posts per page
        return view('posts.index', compact('posts'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //debugging code
        //dd($request->all());

        $request->validate([
          'title' => 'required',
          'content' => 'required',

        ]);

        Post::create($request->all());
        return redirect() ->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //debugging code
        //dd($post);
            return view('Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

    // editing post 
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        //this function is to update post 
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
                        ->with('success', 'Your Post Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success', 'Your Post Deleted Successfully.');
    }

}
