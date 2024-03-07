<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // dd(request('search')); // to get search input parameter using die dump

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            /*
                latest() to get the latest post,
                filterPost() to filter posts by search request
            */
            'posts' => Post::latest()->filterPost(request(['search']))->get()
        ]);
    }

    // Menggunakan Route Model Binding
    public function show(Post $post){
        return view('post', [
            'title' => $post->postTitle,
            'active' => 'post',
            'post' => $post
        ]);
    }

}
