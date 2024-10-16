<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view("posts.index",compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       if (!Auth::check()){
        abort(403);
       }
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $datavalidation = $request->validate([
            "title" => "required|max:255|min:5",
            "content" => "required|min:10",
        ]);

        $datavalidation['user_id'] = Auth::id();

        Post::create($datavalidation);


        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        if ($post->user_id != Auth::id()){
            abort(403);
        }
        return view("posts.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        
        $validated = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required|min:10'
        ]);


        $post->update($validated);
        return view('posts.show',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }
}
