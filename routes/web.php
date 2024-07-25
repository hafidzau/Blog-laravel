<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',[
        'judul'=>'home',
        'isi'=>'RORRRRRRRR'
    ]);
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

Route::get('/posts', function () {
    $posts = Post::with(['author', 'category']);

    return view('posts',['judul'=>'blog', 'posts'=>Post::filter(request(['search', 'category', 'author']))->latest()->paginate(12)->withQueryString()]);
    
});

Route::get('/posts/{post:slug}', function( Post $post){

    return view('post', ['judul'=>'single post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function( User $user){
    $posts = $user->posts->load('category', 'author');

    return view('posts', ['judul'=>count($posts) . ' articles by ' . $user->username, 'posts' => $posts]);
});

Route::get('/categories/{category:slug}', function( Category $category){
    $posts = $category->posts->load('category', 'author');

    return view('posts', ['judul'=> 'articles in : ' . $category->name, 'posts' => $posts]);
});

// eager loading by default
// Route::get('/posts', function () {     
//     $posts = Post::latest()->get();
//     return view('posts',['judul'=>'blog', 'posts'=>$posts]);
// });

// Route::get('/posts/{post:slug}', function( Post $post){

//     return view('post', ['judul'=>'single post', 'post' => $post]);
// });

// Route::get('/authors/{user:username}', function( User $user){

//     return view('posts', ['judul'=>count($user->posts) . ' articles by ' . $user->username, 'posts' => $user->posts]);
// });

// Route::get('/categories/{category:slug}', function( Category $category){


//     return view('posts', ['judul'=> 'articles in : ' . $category->name, 'posts' => $category->posts]);
// });