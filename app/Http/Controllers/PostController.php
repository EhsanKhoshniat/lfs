<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        // // Created a scope on Post model 
        // if ($month = request('month')) 
        // {
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if ($year = request('year'))
        // {
        //     $posts->whereYear('created_at', $year);
        // }

        // $posts = $posts->get();

        //Temporary
        $archives = Post::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as Published')
        ->groupBy('year','month')
        ->get()
        ->toArray();

        // return $archives;
        return view('posts.index', compact('posts', 'archives'));
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
