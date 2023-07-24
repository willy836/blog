@extends('layouts.app')

@section('content')

@include('partials.messages')

<h2 class="text-center my-4">All Posts</h2>
<a href="{{route('home.create')}}" class="btn btn-primary mb-3">Create Post</a>

@if (count($posts) > 0)
    @foreach ($posts as $post)
        <article class="card mb-3">
            <div class="card-body">
                <h4>{{$post->title}}</h4>
                <h6>{{$post->cat}}</h6>
                <p>{{Str::limit($post->content, 150, '...')}}</p>
                <a href="{{route('home.show', $post->id)}}">See Full Post</a>
            </div>
        </article>
    @endforeach
@else
    <p>There are no posts. Add your first post.</p>
@endif

@endsection