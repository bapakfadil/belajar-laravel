<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
