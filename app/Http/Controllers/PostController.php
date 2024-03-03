<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            'title' => 'All Posts',
            //'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    // Menggunakan Route Model Binding
    public function show(Post $post){
        return view('post', [
            'title' => $post->postTitle,
            'post' => $post
        ]);
    }

}
