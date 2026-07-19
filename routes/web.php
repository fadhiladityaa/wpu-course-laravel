<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
Route::get('/post/{post:slug}', function (Post $post) {
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

Route::get('/posts/{user:name}', function (User $user) {
    return view('posts', [
        'title' => 'Article By. ' . $user->name,
        'posts' => $user->posts,
    ]);
});

Route::get('/posts/categories/{category:name}', function(Category $category) {
    return view('posts', [
        'title' => 'Post Category : ' . $category->name,
        'posts' => $category->posts,
    ]);
});