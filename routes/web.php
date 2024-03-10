<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Halaman Utama
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

// Halaman About
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Tanjiro',
        'email' => 'tanjiro@mail.com',
        'image' => 'tanjiro.jpg'
    ]);
});

// Halaman Blog Utama
Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'All Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// unused, replaced by Category Query at Post Model
/*
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "$category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('author', 'category')
    ]);
});
*/

// unused, replaced by Author Query at Post Model
/*
Route::get('/author/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author')
    ]);
});
*/
