<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {

    $posts = Post::latest()->titleSearch(request(['keyword', 'category', 'author']))->get();
    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
