<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Fadhil Aditya | 10 Juli, 2026',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ],
             [
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Keyza Mayrel Avriza 11 Juni, 2025',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ]
        ]
        ]);
});

// dd(request());
Route::get('/post/{slug}', function ($slug) {
    $posts = [
         [
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Fadhil Aditya | 10 Juli, 2026',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ],
             [
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Keyza Mayrel Avriza 11 Juni, 2025',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo sint debitis facere! Perspiciatis ipsa illum reiciendis optio placeat exercitationem iste, obcaecati cum ad. Adipisci, soluta quos voluptas doloribus saepe dignissimos dolor enim asperiores, rerum omnis nostrum perferendis necessitatibus temporibus optio repudiandae eius. Sit ab eaque odit. Magnam blanditiis dolorem quam fuga, sed rem iste.'
            ]
    ];

        $post = Arr::first($posts, function($post) use ($slug) {
              return $post['slug'] == $slug;
        });
        
        // dd($post);
        return view('post', [
            'title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
