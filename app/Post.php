<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'url', 'image_url'];

    public function likes()
    {
        return $this->belongsToMany('App\User', 'likes');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
