<?php

namespace App;

class Comment extends Model
{
    // Show the post related to the comment
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
