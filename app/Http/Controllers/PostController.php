<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // dd(request('search')); // to get search input parameter using die dump

        // declared an empty title variable
        $title = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            /*
                latest() to get the latest post,
                filterPost() to filter posts by search request
            */
            // Using get() to displays all posts
            // 'posts' => Post::latest()->filterPost(request(['search', 'category', 'author']))->get()

            /*
                Use paginate() to display a certain amount of post,
                '7' to display only 7 latest posts | withQueryString,
                to add last search query in pagination.
            */
            'posts' => Post::latest()->filterPost(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
