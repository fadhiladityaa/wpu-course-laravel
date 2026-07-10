<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'title' => 'Judul Artikel 1',
                'author' => 'Fadhil Aditya | 10 Juli, 2026',
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ],
             [
                'title' => 'Judul Artikel 2',
                'author' => 'Keyza Mayrel Avriza 11 Juni, 2025',
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ]
        ]
        ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
