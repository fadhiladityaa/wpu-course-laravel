<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    return view('posts', ['title' => 'blog']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
