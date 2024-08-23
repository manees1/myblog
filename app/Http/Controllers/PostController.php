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
        //creating fake posts 
        //dd(Post::factory()->create());
        //dd(Auth::user());
        $posts = Post::all();
        // dd($posts); 


        return view('Posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('admin.posts.create');
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
        return redirect() ->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //debugging code
        //dd($post);
            return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

}
