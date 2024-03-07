<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // dd(request('search')); // to get search parameter using die dump

        $posts = Post::latest();

        // create search handling in Blog page
        if(request('search')) {
            $posts->where('postTitle', 'like', '%' . request('search') . '%')
                  ->orWhere('postBody', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            'posts' => $posts->get()
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
