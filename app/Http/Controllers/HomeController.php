<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('home.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create');
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

        return redirect()->route('home.index')->with('success', 'Post was created successfully.');
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

        return view('home.show', [
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

        return view('home.edit', [
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

        return redirect()->route('home.index')->with('success', 'Post was updated successfully.');
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

        return redirect()->route('home.index')->with('success', 'Post was deleted successfully.');
    }
}
