<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function isLikedByMe($id)
    {
        $post = Post::findOrFail($id)->first();
        if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()) {
            return 'true';
        }
        return 'false';
    }

    public function like()
    {
        // Get the Post
        $post = Post::findOrFail($id)->first();
        // If the user already like this post, we delete the like
        $existing_like = Like::wherePostId($post->id)->whereUserId(Auth::id())->first();
        if (!is_null($existing_like)) {
            $existing_like->delete();
        } else {
            // The user don't like this post yet

            // We check if the user already liked this post once, but unliked it.
            $existing_like = Like::onlyTrashed()->wherePostId($post->id)->whereUserId(Auth::id())->first();

            if (!is_null($existing_like)) {
                // The user has liked the post before, but deleted his like later
                // Then, we restore this like
                $existing_like->restore();
            } else {
                // The user never liked this post before, so we create the like, and we can trigger some events (notifications, etc)
                $like = new Like;
                $like->look_id = $look->id;
                $like->user_id = Auth::id();
                $like->save();
            }
        }
    }
}
