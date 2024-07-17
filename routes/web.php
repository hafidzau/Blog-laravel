<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'judul'=>'home',
        'isi'=>'RORRRRRRRR'
    ]);
});

Route::get('/posts', function () {
    return view('posts',['judul'=>'blog', 'posts'=>[
        [
            'id'=>1,
            'slug'=>'blog-pertama',
            'title'=>'blog pertama',
            'author'=>'hafidz',
            'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minus rem eveniet officia laborum veniam velit a distinctio facilis. Saepe commodi sunt adipisci veniam tempora excepturi cumque hic assumenda possimus!'
        ],
        [
            'id'=>2,
            'slug'=>'blog-kedua',
            'title'=>'blog kedua',
            'author'=>'syafiq',
            'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minus rem eveniet officia laborum veniam velit a distinctio facilis. Saepe commodi sunt adipisci veniam tempora excepturi cumque hic assumenda possimus!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts =[
        [
            'id'=>1,
            'slug'=>'blog-pertama',
            'title'=>'blog pertama',
            'author'=>'hafidz',
            'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minus rem eveniet officia laborum veniam velit a distinctio facilis. Saepe commodi sunt adipisci veniam tempora excepturi cumque hic assumenda possimus!'
        ],
        [
            'id'=>2,
            'slug'=>'blog-kedua',
            'title'=>'blog kedua',
            'author'=>'syafiq',
            'isi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minus rem eveniet officia laborum veniam velit a distinctio facilis. Saepe commodi sunt adipisci veniam tempora excepturi cumque hic assumenda possimus!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['judul'=>'single post', 'post' => $post]);
});



Route::get('/about', function () {
    return view('about',[
        'judul'=>'about',
        'isi'=>'saya menyukai malam'
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        'judul'=>'contact',
        'isi'=>'hafidz@gmail.com'
    ]);
});

