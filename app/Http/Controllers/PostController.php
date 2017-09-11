<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show()
    {
    	return view('posts.show');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	// dd(request(['title', 'body']));  //return raw data 
    	// Create a new post using the request data
     //    $post = new Post;

     //    $post->title = request('title');
     //    $post->body = request('body');

    	// // Save it to the database
     //    $post->save();
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required',
            ]);

        Post::create(request(['title', 'body']));

    	// Redirect to some page
        return redirect('/posts');
    }
}
