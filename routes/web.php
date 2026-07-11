<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::all(),
        ]);
});

// dd(request());
Route::get('/post/{id}', function ($id) {
        $post = Post::findOrFail($id);
        // dd($post);
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
