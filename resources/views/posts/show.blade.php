@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Single Post Page</h2>
<article>
    <h4>{{$post->title}}</h4>
    <p>{{$post->content}}</p>
    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
</article>

@endsection