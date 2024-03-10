<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['postTitle', 'author', 'excerpt', 'postBody'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilterPost($query, array $filters){
        // create search post by title and text on body handling in Blog page
        /*
        if(isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('postTitle', 'like', '%' . $filters['search'] . '%')
                         ->orWhere('postBody', 'like', '%' . $filters['search'] . '%');
        }
        */


        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('postTitle', 'like', '%' . $search . '%')
                        ->orWhere('postBody', 'like', '%' . $search . '%')
                         ->orWhere('excerpt', 'like', '%' . $search . '%');
        });

        // using callback function to callout search Category query
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // using arrow function to callout search Author query
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );

        // search Author query using callback function
        // $query->when($filters['author'] ?? false, function($query, $author) {
        //     return $query->whereHas('author', function($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
