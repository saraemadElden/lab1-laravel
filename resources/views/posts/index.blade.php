@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <h1 class="mb-4 text-primary">All Posts</h1>

    @foreach ($posts as $post)
        <div class="card mb-3 shadow">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($post->image) }}" class="img-fluid rounded-start" alt="Post Image">
                </div>
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>

                        <form action="{{ route('posts.delete', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        <!-- {{ $posts->links() }} -->
    </div>
@endsection
