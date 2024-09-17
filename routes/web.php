<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts/{id}', function($id){
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Delai R. S.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, ratione voluptas dicta tempora ea libero minima nisi, eius cum labore quis suscipit, fugiat ullam accusantium quibusdam sint pariatur dolores atque.'  
        ],        
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Delai R. S.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, ratione voluptas dicta tempora ea libero minima nisi, eius cum labore quis suscipit, fugiat ullam accusantium quibusdam sint pariatur dolores atque.'       
        ]
    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
    [
        'id' => 1,
        'title' => 'Judul Artikel 1',
        'author' => 'Delai R. S.',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, ratione voluptas dicta tempora ea libero minima nisi, eius cum labore quis suscipit, fugiat ullam accusantium quibusdam sint pariatur dolores atque.'  
    ],        
    [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'author' => 'Delai R. S.',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, ratione voluptas dicta tempora ea libero minima nisi, eius cum labore quis suscipit, fugiat ullam accusantium quibusdam sint pariatur dolores atque.'       
    ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
