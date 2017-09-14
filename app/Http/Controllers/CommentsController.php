<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    // Long way:
    	// Comment::create([
    	// 	'body' => request('body'),
    	// 	'post_id' => $post->id
    	// 	]);

    	$this->validate(request(), ['body' => 'required|min:2']);

    // Elequent way:
    	$post->addComment(request('body'));
    	return back();
    }
}
