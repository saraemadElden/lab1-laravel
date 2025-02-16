@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <h1 class="mb-4 text-primary">All Posts</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-dark justify-content-center">Add new post</a>
    
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($post->image) }}" 
                             class="card-img-top" 
                             alt="Post Image" 
                             style="height: 200px; width: 100%; object-fit: contain; border-radius: 10px;">
                             
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($post->description, 100) }}</p>
                            <div>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read more</a>
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
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
