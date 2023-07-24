<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index()
    {
        $posts = Post::find(1)->posts()->where('cat', 'Category One');

        return view('categories.index', [
            'posts' => $posts
        ]);

    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedCat = $request->validate(
            [
                'cat' => 'required | min:3 | max:10',
            ]
        );

        Post::create($validatedCat);

        return redirect()->route('home.index')->with('success', 'Post was created successfully.');
    }
}
