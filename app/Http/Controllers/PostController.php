<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required | min:3 | max:20',
                'content' => 'required | min:20'
            ]
        );

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        $validatedData = $request->validate(
            [
                'title' => 'required | min:3 | max:20',
                'content' => 'required | min:20'
            ]
        );

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post was deleted successfully.');
    }
}
