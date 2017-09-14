<?php

namespace App;

class Post extends Model
{
    // protected $fillable = ['title', 'body']; // Use fillable proprty as a white list.
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function post()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }
}
