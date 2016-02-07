<?php

namespace App;

use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'url', 'image_url'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function getLikesAttribute()
    {
        return $this->likes()->count();
    }

    public function getReportsAttribute()
    {
        return $this->report()->count();
    }
}
