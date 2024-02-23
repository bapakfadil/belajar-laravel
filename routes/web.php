<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Halaman Utama
Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Halaman About
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Tanjiro',
        'email' => 'tanjiro@mail.com',
        'image' => 'tanjiro.jpg'
    ]);
});

// Halaman Blog Utama
Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
