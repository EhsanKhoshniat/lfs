<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
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

        auth()->user()->publish(
            new Post(request(['title', 'body']))
            );

  

    	// Redirect to some page
        return redirect('/posts');
    }
}
