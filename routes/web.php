<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello', function () {
//     return "hello from Laravel!";
// });
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/iti', function () {
    return view('iti');
});

// Posts List Page
Route::get('/posts', function () {
    $posts = [
        ['id' => 1, 'title' => 'First Post', 'body' => 'This is the content of the first post in the blog.'],
        ['id' => 2, 'title' => 'Second Post', 'body' => 'This is the content of the second post.'],
        ['id' => 3, 'title' => 'Third Post', 'body' => 'This is the content of the third post.'],
    ];
    return view('posts', compact('posts'));
});

// Single Post Page (by ID)
Route::get('/posts/{id}', function ($id) {
    $posts = [
        1 => ['title' => 'First Post', 'body' => 'This is the content of the first post in the blog.'],
        2 => ['title' => 'Second Post', 'body' => 'This is the content of the second post.'],
        3 => ['title' => 'Third Post', 'body' => 'This is the content of the third post.'],
    ];

    if (!array_key_exists($id, $posts)) {
        return "<h1 style='color: red; text-align: center; margin-top: 50px;'> No post found with id {$id} </h1>";
    }

    return view('post', ['post' => $posts[$id]]);
})->where('id', '[0-9]+');

