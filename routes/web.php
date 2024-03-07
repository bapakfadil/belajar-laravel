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

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => "$category->name",
        'active' => 'category',
        'posts' => $category->posts->load('author', 'category')
    ]);
});

Route::get('/author/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Author : $author->name",
        'active' => 'author',
        'posts' => $author->posts->load('category', 'author')
    ]);
});
