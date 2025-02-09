@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="card shadow-lg">
        <div class="col-md-4">
                    <img src="{{ asset($post->image) }}" class="img-fluid rounded-start" alt="Post Image">
                </div>
        <div class="card-body">
            <h1 class="card-title">{{ $post->title }}</h1>
            <p class="card-text">{{ $post->description }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Back to all posts</a>
        </div>
    </div>
@endsection
