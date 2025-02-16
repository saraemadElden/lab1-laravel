@extends('layouts.app')

@section('title' , 'Add New post')   

@section('content')

<div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Add New Post</h2>
            <form action="{{ route('posts.stored')}}" method="POST" enctype="multipart/form-data">
              @csrf    
            <div class="mb-3">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Post Content</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"> Image</label>
                    <input type="text" class="form-control" id="image" name="image" accept="image/*">
                                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
