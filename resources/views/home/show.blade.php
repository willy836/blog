@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Single Post Page</h2>
<article>
    <h4>{{$post->title}}</h4>
    <h6>{{$post->cat}}</h6>
    <p>{{$post->content}}</p>
    <a href="{{route('home.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>
    <form action="{{route('home.destroy', $post->id)}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
</article>

@endsection