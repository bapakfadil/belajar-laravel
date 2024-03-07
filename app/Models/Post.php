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
        if(isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('postTitle', 'like', '%' . $filters['search'] . '%')
                         ->orWhere('postBody', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
