<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['post_id', 'user_id'];

    public function post()
    {
        return $this->belongTo(Post::class);
    }
}
