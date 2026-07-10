<?php
namespace App\Models;

use Illuminate\Support\Arr;

Class Post
{
    public static function all() {
        return   [
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
    }

    public static function find(string $slug)
    {
        return Arr::first(static::all(), function($post) use ($slug) {
              return $post['slug'] == $slug;
        });
    }
};