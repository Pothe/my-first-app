<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\tags;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = category::all();
        $tags = tags::all();
        return view('admin.posts.create',compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
           
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
       
        $post->cat_id = $request->cat_id;
        dd($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
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
