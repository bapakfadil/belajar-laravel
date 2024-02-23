<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Tanjiro',
        'email' => 'tanjiro@mail.com',
        'image' => 'tanjiro.jpg'
    ]);
});

// Halaman Blog Utama
Route::get('/blog', function () {
    $blog_posts = [
        [
            'postTitle' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Tanjiro',
            'postBody' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat modi, consequatur aut dolorem quas minus enim ipsam, ipsa dolor ad sint corrupti dignissimos a architecto, suscipit libero optio qui molestias?'
        ],
        [
            'postTitle' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ryuki',
            'postBody' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat modi, consequatur aut dolorem quas minus enim ipsam, ipsa dolor ad sint corrupti dignissimos a architecto, suscipit libero optio qui molestias?'
        ]
    ];

    return view('blog', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('/posts/{slug}', function($slug) {
    $blog_posts = [
        [
            'postTitle' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Tanjiro',
            'postBody' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat modi, consequatur aut dolorem quas minus enim ipsam, ipsa dolor ad sint corrupti dignissimos a architecto, suscipit libero optio qui molestias?'
        ],
        [
            'postTitle' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ryuki',
            'postBody' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat modi, consequatur aut dolorem quas minus enim ipsam, ipsa dolor ad sint corrupti dignissimos a architecto, suscipit libero optio qui molestias?'
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
