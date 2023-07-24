@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Single Post Page</h2>
<form action="{{route('home.store')}}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group mb-3">
        <textarea name="content" rows="5" class="form-control" placeholder="Content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection