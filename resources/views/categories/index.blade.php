@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Categories Index Page</h2>
@if (count($posts))
    @foreach ($posts as $post)
        <article class="card mb-3">
            <div class="card-body">
                <h4>{{$post->title}}</h4>
                <p>{{$post->content}}</p>
            </div>
        </article>
    @endforeach
@else
    <p>There are no posts</p>
@endif

@endsection